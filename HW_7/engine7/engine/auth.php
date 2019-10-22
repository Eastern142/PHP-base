<?php

/* Файл с функциями аутентификации */

// Функция осуществляет запрос на получение пользователя из БД по полю login и сравнивает введенное пользователем
// значение пароля с хранимым значением на сервере
function auth($login, $password)
{
    $db = getDb(); // Записываем в переменную БД запрашивая ее из функции
    $login = mysqli_real_escape_string($db, strip_tags(stripslashes($login))); // Записываем
    // в перменную безопасное значение login из параметра $login
    $sql = "SELECT * FROM `users` WHERE `login` = '{$login}'"; // Записываем в переменную SQL запрос на поиск
    // пользователя с именем $login
    $result = getAssocResult($sql); // Записываем в переменную сформированный ассоциативный массив

    if (password_verify($password, $result[0]['password'])) { // Если введенный пользователем пароль совпадает с
        //паролем на на сервере
        $_SESSION['login'] = $login; // Записываем в сессию login
        $_SESSION['id'] = $result['id']; // Записываем в сессию id

        return true;
    }

    return false;
}

function is_auth()
{
    if (isset($_COOKIE["hash"])) {
        $hash = $_COOKIE["hash"];
        $db = getDb();
        $sql = "SELECT * FROM `users` WHERE `hash` = '{$hash}'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        $user = $row['login'];
        if (!empty($user)) {
            $_SESSION['login'] = $user;
        }
    }

    return isset($_SESSION['login']) ? true : false;
}

// Функция возвращает login пользователя из массива $_SESSION
function get_user()
{
    return $_SESSION['login'];
}

function userRegistration($login, $password)
{
    $password = password_hash($password, PASSWORD_DEFAULT);
    $hash = uniqid(rand(), true);
    $sql = "INSERT INTO `users` (`login`, `password`, `hash`) values ('{$login}', '{$password}', '{$hash}')";

    if (executeQuery($sql)) {
            header("Location: /");
            echo "Вы успешно зарегистрированы";
        }
}