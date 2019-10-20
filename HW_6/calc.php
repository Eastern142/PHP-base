<?php

// Скрипт передает сам себе переменные x, y, sign и в случае их наличия отображает ответ

if (isset($_GET['x'])) {
    $x = strip_tags(htmlspecialchars($_GET['x']));
} else {
    $x = 0;
}
if (isset($_GET['y'])) {
    $y = strip_tags(htmlspecialchars($_GET['y']));
} else {
    $y = 0;
}
if (isset($_GET['sign'])) {
    $sign = strip_tags(htmlspecialchars($_GET['sign']));
} else {
    $sign = 'plus';
}
if (isset($_GET['z'])) {
    $z = strip_tags(htmlspecialchars($_GET['x']));
}
if (isset($x) && isset($y)) {
    switch ($sign) {
        case 'plus':
            $z = $x + $y;
            break;
        case 'minus':
            $z = $x - $y;
            break;
        case 'pow':
            $z = $x * $y;
            break;
        case 'dev':
            if ($y != 0) {
                $z = $x / $y;
            } else {
                $z = 'infinity';
            }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calc</title>
</head>
<body>
<form method="get">
    <input name="x" type="number" style="width: 50px" value="<?= $x ?>">
    <select name="sign" style="width: 40px">
        <option <? if ($sign == 'plus') echo 'selected'; ?> value="plus">+</option>
        <option <? if ($sign == 'minus') echo 'selected'; ?> value="minus">-</option>
        <option <? if ($sign == 'pow') echo 'selected'; ?> value="pow">*</option>
        <option <? if ($sign == 'dev') echo 'selected'; ?> value="dev">/</option>
    </select>
    <input name="y" type="number" style="width: 50px" value="<?= $y ?>">
    <input type="submit" value="=" style="width: 30px">
    <b><? if (isset($z)) echo "$z" ?></b>
</form>
</body>
</html>