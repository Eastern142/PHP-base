<?php

// Формирование массива с именами изображений.
$img = array_splice(scandir("./img/small"), 2);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery_single_page</title>
</head>
<body>
<? foreach ($img as $item): ?>
    <a href="./img/big/<?= $item ?>" target="_blank"><img src="./img/small/<?= $item ?>" alt="#"></a>
<? endforeach; ?>
</body>
</html>