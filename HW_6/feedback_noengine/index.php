<?php
$db = mysqli_connect("localhost","root","","test");

if ($_GET['action'] == "add") {
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$_POST['name'])));
    $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$_POST['feedback'])));
    $sql = "INSERT INTO `feedback` (`name`, `feedback`) VALUES ('{$name}', '{$feedback}');";

    $result = mysqli_query($db, $sql);

    header("Location: /?message=OK");
}
$row = [];
$buttonText = "Отправить";
$action = "add";
if ($_GET['action'] == "edit") {
    $id = (int)$_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM `feedback` WHERE id = {$id}");
    $row = mysqli_fetch_assoc($result);
    $buttonText = "Править";
    $action = "save";

}

if ($_GET['action'] == "save") {
    $id = (int)$_POST['id'];
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$_POST['name'])));
    $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$_POST['feedback'])));
    $sql = "UPDATE `feedback` SET `name` = '{$name}', `feedback` = '{$feedback}' WHERE `feedback`.`id` = {$id};";

    $result = mysqli_query($db, $sql);

    header("Location: /?message=edit");
}


$result = mysqli_query($db, "SELECT * FROM `feedback` WHERE 1");

if (isset($_GET['message'])) {
    switch ($_GET['message']) {
        case "OK":
            $message = "Сообщение добавлено";
            break;
            case "edit":
            $message = "Сообщение отредактировано";
            break;
        default:
            $message = "";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Отзывы</h2>
<?foreach ($result as $item):?>
<?=$item['name']?>: <?=$item['feedback']?> <a href="?action=edit&id=<?=$item['id']?>">[edit]</a> <br>
<?endforeach;?>
<br>
<?=$message?>
<form method="post" action="?action=<?=$action?>">
    <input hidden type="text" name="id" value="<?=$row['id']?>"><br>
    <input placeholder="Имя" type="text" name="name" value="<?=$row['name']?>"><br>
    <input placeholder="Отзыв" type="text" name="feedback" value="<?=$row['feedback']?>"><br>
    <input type="submit" name="ok" value="<?=$buttonText?>">
</form>

</body>
</html>