<?php

require_once "../config/config.php";

// Получение имени страницы для отображения.
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "index";
}

// Подготовка контента для страниц.
$params = ["login" => "admin"];
switch ($page) {
    case "index":
        $params["name"] = "Клен";
        break;
    case "catalog":
        $params["catalog"] = [
            [
                "img" => "01.jpg",
                "name" => "Пицца",
                "price" => 24
            ],
            [
                "img" => "02.jpg",
                "name" => "Чай",
                "price" => 1
            ],
            [
                "img" => "03.jpg",
                "name" => "Яблоко",
                "price" => 12
            ],
        ];
        break;

// Контент для frontend части.
//    case "apicatalog":
//        $params["catalog"] = [
//            [
//                "name" => "Пицца",
//                "price" => 24
//            ],
//            [
//                "name" => "Яблоко",
//                "price" => 12
//            ],
//        ];
//        echo json_encode($params, JSON_UNESCAPED_UNICODE);
//        exit;
//        break;
}

// Запрос вывода сформированных страниц.
echo render($page, $params);