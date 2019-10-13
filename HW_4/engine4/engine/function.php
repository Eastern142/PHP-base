<?php

// Метод рендера содержимого страниц.
function render($page, $params = [])
{
    return renderTemplate(LAYOUTS_DIR . "main", [
        "content" => renderTemplate($page, $params),
        "menu" => renderTemplate("menu", $params),
    ]);
}

// Метод формирования содержимого страниц.
function renderTemplate($page, $params = [])
{
    ob_start();

    if (!is_null($params))
        extract($params);
//    foreach ($params as $key => $param) {
//        $$key = $param;
//    }

    $fileName = TEMPLATES_DIR . $page . ".php";
    if (file_exists($fileName)) {
        include $fileName;
    } else {
        die("Такой страницы не существует. 404");
    }

    return ob_get_clean();
}

// Метод формирования меню.
function renderMenu($menu_items, $result = '')
{
    $result .= '<ul>';

    foreach ($menu_items as $item) {

        $result .= '<li><a href="/?page=' . $item['link'] . '">' . $item['title'] . '</a>';

        if (isset($item['submenu'])) {
            $result .= renderMenu($item['submenu']);
        }

        $result .= '</li>';
    }

    $result .= '</ul>';

    return $result;
}

// Метод формирования изображений галереи.
function getImageList($dir)
{
    $folder_contents = scandir($dir);
    $result = [];

    foreach ($folder_contents as $item) {
        if (is_dir($dir . '/' . $item)) continue;
        array_push($result, $item);
    }

    return $result;
}