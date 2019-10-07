<?php

echo renderTemplate("layout");

function renderTemplate($page) {
    ob_start();
    include('menu.php');
    include "index.php";
    return ob_get_clean();
}