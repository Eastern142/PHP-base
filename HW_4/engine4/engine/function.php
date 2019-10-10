<?php

// Метод рендера содержимого страниц.
function render($page, $params = [])
{
    return renderTemplate(LAYOUTS_DIR . "main", [
        "content" => renderTemplate($page, $params),
        "menu" => renderTemplate('menu'),
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