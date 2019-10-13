<?php
$db = @mysqli_connect("localhost", "test", "12345", "test") or die("Error: " . mysqli_connect_error());

$id = (int)$_GET["id"];

$result = @mysqli_query($db, "SELECT * FROM `news` WHERE id = {$id}");

/*
foreach ($result as $value) {
    echo "<h2>{$value['title']}</h2><p>{$value['prev']}</p>";
}
*/
if ($result->num_rows != 0) {
    $row = @mysqli_fetch_assoc($result);
} else echo "Пусто";


echo "<h2><a href='news.php?id={$row['id']}'>{$row['title']}</a></h2><p>{$row['text']}</p>";


mysqli_close($db);