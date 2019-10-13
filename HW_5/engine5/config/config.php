<?php
//Файл констант
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'shop3');

//Тут же подключим основные функции-модули нашего приложения
require_once "../engine/functions.php";
require_once "../engine/log.php";
require_once "../engine/db.php";
require_once "../engine/news.php";