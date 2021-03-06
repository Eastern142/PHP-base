<?php

/* Файл констант */

define('TEMPLATES_DIR', '../views/');
define('LAYOUTS_DIR', 'layouts/');
define('IMG_DIR', '/img/');
define('MODULES_DIR', '../engine/modules/');

// DB config
define('HOST', 'localhost'); // Хост БД
define('USER', 'root'); // Пользователь
define('PASS', ''); // Пароль
define('DB', 'powertoplay1'); // Таблтца БД

// Массив сервисных сообщений
const ERR_CODE = [
    null => "",
    "OK" => "Отзыв добавлен!",
    "DELETED" => "Отзыв удален!",
    "ERROR_ADD" => "Ошибка добавления отзыва!",
    "ERROR_DEL" => "Ошибка удаления отзыва!",
    "ERROR_UPDATE" => "Ошибка изменения отзыва!",
    "UPDATED" => "Отзыв изменен!",
    "ADD_ORDER" => "Ваш заказ отправлен в обработку. В ближайшее время с вами свяжется наш сотрудник для подтверждения заказа",
    "ERROR_ORDER" => "Произошла ошибка, пожалуйста повторите попыпку!"
];

// Подключение основных функций-модулей приложения
// Можно подключить и в public/index.php
require_once "../engine/lib_autoload.php";