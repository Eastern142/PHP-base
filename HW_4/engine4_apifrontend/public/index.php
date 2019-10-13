<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

$params = ['login' => 'admin'];
switch ($page) {

    case 'index':
        $params['name'] = 'Клен';
        break;

    case 'gallery':
        $params['gallery'] = getGallery();
        break;


    case 'catalog':
        $params['catalog'] = [
            [
                'name' => 'Пицца',
                'price' => 24
            ],
            [
                'name' => 'Чай',
                'price' => 1
            ],
            [
                'name' => 'Яблоко',
                'price' => 12
            ],
        ];
        break;


}

echo render($page, $params);


