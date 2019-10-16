<?php
function getAllFeedback() {
    $sql = "SELECT * FROM `feedback` ORDER BY id DESC";
    return getAssocResult($sql);
}

function doFeedbackAction(&$params, $action, $id) {
    if ($_GET['message'] == 1) {$params['error'] = "Отзыв добавлен!";}
    if ($_GET['message'] == 2) {$params['error'] = "Отзыв удален!";}

    if ($action == "delete") {
        var_dump("Удалим отзыв с id={$id}");
        die();
    }
    if ($action == "add") {
        var_dump("Добавим отзыв!");
        die();
    }

}