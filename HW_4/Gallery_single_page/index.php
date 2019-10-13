<?php

// Константы необходимых директорий.
define("DIR_ROOT", $_SERVER["DOCUMENT_ROOT"]);
define("DIR_IMG", "/img/");

// Формирование массива с именами изображений.
$img = array_splice(scandir(DIR_ROOT . DIR_IMG ."small"), 2);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery_single_page</title>
</head>
<body>
<? foreach ($img as $smallimg): ?>
    <a href="<?= DIR_IMG . "big/" . $smallimg ?>" target="_blank"><img src="<?= DIR_IMG . "small/" . $smallimg ?>" alt="#"></a>
<? endforeach; ?>
</body>
</html>