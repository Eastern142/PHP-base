<?php

$a = strip_tags(htmlspecialchars($_POST['var1']));
$b = strip_tags(htmlspecialchars($_POST['var2']));

if (isset($_POST['operation'])) {
    if ($a === "" || $b === "") {
        $result = "Введите корректные данные";
    } else {
        switch ($_POST['operation']) {
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '/':
                if ($b == 0) {
                    $result = "На ноль делить нельзя";
                } else {
                    $result = $a / $b;
                }
                break;
            default:
                $result = "Что-то пошло не так";
                break;
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calc2</title>
</head>
<body>
<form method="post">
    <label>Число 1</label>
    <input type="number" name="var1" value="<?= $a ?>">
    <label>Число 2</label>
    <input type="number" name="var2" value="<?= $b ?>">

    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
    <div><b>Результат: <?= $result ?></b></div>
</form>
</body>
</html>