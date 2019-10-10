<?php

// Метод рендера содержимого страниц.
function render()
{
    return renderTemplate(TEMPLATES_DIR . "index", getIMG(IMG_DIR));
}

// Метод формирования содержимого страниц.
function renderTemplate($page, $img)
{
    ob_start();

    $fileName = $page . ".php";
    if (file_exists($fileName)) {
        include $fileName;
    } else {
        die("Такой страницы не существует. 404");
    }

    return ob_get_clean();
}

// Метод получения изображений из директории.
function getIMG ($img_dir) {
    $array_img = array_splice(scandir($img_dir. "small/"), 2);
    return $array_img;
}