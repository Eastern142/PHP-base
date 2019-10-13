<?php

define("DBNAME", "test");
$db = @mysqli_connect("localhost", "root", "", DBNAME) or die("Error: " . mysqli_connect_error());

// Автоматическая загрузка дампа в БД.
$result = mysqli_query($db, "SHOW TABLES FROM " . DBNAME . ";");
if (mysqli_num_rows($result) === 0) {
    $dump = file_get_contents("test.sql");

    $a = 0;
    while ($b = strpos($dump, ";", $a + 1)) {
        $a = substr($dump, $a + 1, $b - $a);
        mysqli_query($db, $a);
        $a = $b;
    }
    var_dump("Дамп загружен!");
}

$result = @mysqli_query($db, "SELECT * FROM `news` WHERE 1");

/*
foreach ($result as $value) {
    echo "<h2>{$value['title']}</h2><p>{$value['prev']}</p>";
}
*/
if ($_GET['action'] == 'delete') {
    $id = (int)$_GET['id'];
    $result = @mysqli_query($db, "DELETE FROM `news` WHERE id = {$id}");
    header("Location: /");

}

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>
<a href='news.php?id={$row['id']}'>{$row['title']}</a>
<a href='?id={$row['id']}&action=delete'>[X]</a>
</h2>
<p>{$row['prev']}</p>";
}

mysqli_close($db);