<?php

echo renderTemplate("layout");

function renderTemplate($page) {
    ob_start();
    include('menu.php');
    include "$page.php";
    return ob_get_clean();
}