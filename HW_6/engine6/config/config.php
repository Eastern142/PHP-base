<?php

/* Файл констант. */
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');
define('IMG_DIR', '/img/');
define('STYLE_DIR', '/css/');

// Подключим конфигурационный файл базы данных.
include "db_config.php";

// Подключим основные функции-модули приложения.
require_once "../engine/functions.php";
require_once "../engine/db.php";
require_once "../engine/goods.php";
require_once "../engine/feedback.php";
require_once "../engine/gallery.php";
require_once "../engine/news.php";
require_once "../engine/log.php";