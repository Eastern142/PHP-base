<?php
//Действия по авторизации пользователя
function authController(&$params, $action, $id) {
switch ($action) {
    case 'login':
        //Авторизуем пользователя
        var_dump($_POST);
        die("Авторизация");
    break;

    case 'logout':
        session_destroy();
        setcookie("hash");
        header("Location: /");
        break;
}

return $params;
}