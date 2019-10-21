<?php
session_start();
//Точка входа в приложение, сюда мы попадаем каждый раз когда загружаем страницу

//Первым делом подключим файл с константами настроек
include "../config/main.php";

$url_array = explode("/", $_SERVER['REQUEST_URI']);


//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index
$page = null;
$action = null;
$id = null;
if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
    if (!$url_array[2]=="") {
        if (is_numeric($url_array[2])) {
            $id = $url_array[2];
        } else {
            $action = $url_array[2];
            if (is_numeric($url_array[3])) {
                $id = $url_array[3];
            }
        }
    }
}

//$params = prepareVariables($page, $action, $id);
$params = [];
/*
   if (is_auth()) {
       $allow = true;
       $user = get_user();
   }
*/
// $params['allow'] = true;
// $params['count'] = getBasketCount();

$controllerName = $page . "Controller";
if (function_exists($controllerName)) {
    echo $controllerName($params, $action, $id);
} else {
    die("Не правильный котроллер!");
}







