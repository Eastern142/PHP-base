<?php

function getOrderStatus(&$params, $action, $name, $phone, $address)
{
    $params['order_status'] = ERR_CODE[$_GET['status']];

    if ($action == "status") {
        if (addOrder($name, $phone, $address)) {
            header("Location: /order/?status=ADD_ORDER");
        } else {
            header("Location: /order/?status=ERROR_ORDER");
        }
    }
}

function addOrder($name, $phone, $address) {
    $session_id = session_id();
    $name=strip_tags(htmlspecialchars($name));
    $phone=strip_tags(htmlspecialchars($phone));
    $address=strip_tags(htmlspecialchars($address));
    $sql = "INSERT INTO `orders` (`name`, `phone`, `address`, `session_id`) VALUES ('{$name}', '{$phone}', '{$address}', '{$session_id}')";

    if (executeQuery($sql)) {
        session_regenerate_id();
        return true;
    }

    return false;
}