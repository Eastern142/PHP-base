<?php

$menuItem = [
    'Меню1' => 'task_7.php',
    'Меню2' => 'catalog.php',
    'Меню3' => 'gallery.php',
    'Меню4' => 'contacts.php',
];

$menu = getMenu($menuItem);

function getMenu($menuItem) {
    $menu = '<ul>';
    foreach ($menuItem as $key => $value) {
        $menu = $menu . "<li><a href='$value'>$key</a>";
    }

    return $menu . "</ul>";
}