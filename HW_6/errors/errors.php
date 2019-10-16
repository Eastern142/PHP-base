<?
$errors = [];
$err_decode = [
        1 => "Укажите логин",
        2 => "Укажите пароль"
];
if (!empty($_POST)) {
    if (empty($_POST['login'])) {
        $errors[] = 1;
    }
    if (empty($_POST['pass'])) {
        $errors[] = 2;
    }

    header("Location: ?errors=" . json_encode($errors));

}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<?php
if (!empty($_GET['errors'])) {
    $errors = json_decode($_GET['errors']);
    foreach ($errors as $error) {
        echo $err_decode[$error] . "<br>";
    }
}
?>
<form action="" method="post">
    <input type="text" name="login">
    <input type="password" name="pass">
    <input type="submit">
</form>

</body>
</html>
