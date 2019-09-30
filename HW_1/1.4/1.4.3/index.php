<?php
$title = "Главная страница - страница обо мне";
$h1 = "Информация обо мне";
$year = 2019;

$content = file_get_contents("template.tmpl");

$content = str_replace("{{ title }}", $title, $content);
$content = str_replace("{{ h1 }}", $h1, $content);
$content = str_replace("{{ year }}", $year, $content);

echo $content;