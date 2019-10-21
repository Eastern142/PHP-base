<?php
//Файл констант
define("TEMLATES_DIR", '../views/');
define("LAYOUTS_DIR", 'layout/');


/* DB config */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'shop');

const ERR_CODE = [
    null => "",
    "OK" => "Отзыв добавлен!",
    "DELETED" => "Отзыв удален!",
    "ERROR_ADD" => "Ошибка добавления отзыва!",
    "ERROR_DEL" => "Ошибка удаления отзыва!",
    "ERROR_UPDATE" => "Ошибка изменения отзыва!",
    "UPDATED" => "Отзыв изменен!"
];

//Тут же подключим основные функции нашего приложения, пока это render
//Можете кстати подключить и в главном index.php если такая вложенность напрягает
//include_once "../controllers/controller.php";
include_once "../engine/core.php";
include_once "../engine/log.php";
include_once "../engine/db.php";
include_once "../models/news.php";
include_once "../models/feedback.php";
include_once "../models/goods.php";
include_once "../models/auth.php";
include_once "../controllers/catalogController.php";
include_once "../controllers/indexController.php";
include_once "../controllers/authController.php";
include_once "../controllers/newsController.php";
include_once "../controllers/basketController.php";
include_once "../controllers/feedbackController.php";

