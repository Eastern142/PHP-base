<?php
function basketController(&$params, $action, $id = null) {

    $action = $action ?? 'basket';

    switch ($action) {
        case 'basket':

            $params["news"] = getNews();

            break;
    }
    return render($action, $params);
}