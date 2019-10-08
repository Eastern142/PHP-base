<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}
_log($page);
$params = ['login' => 'admin'];
switch ($page) {
    case 'index':
        $params['name'] = 'Клен';
        _log($params);
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

        case 'apicatalog':
        $params['catalog'] = [
            [
                'name' => 'Пицца',
                'price' => 24
            ],

            [
                'name' => 'Яблоко',
                'price' => 12
            ],
        ];

        echo json_encode($params, JSON_UNESCAPED_UNICODE);
        exit;
        break;

}

echo render($page, $params);


