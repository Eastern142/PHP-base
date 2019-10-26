<?php

// Функция возвращает статус выполнения операции "Оформить заказ"
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

// Функция выполняет sql запрос на добавление данных пользователя в таблицу orders и возвращает boolean значение
// выполненной оперции
function addOrder($name, $phone, $address)
{
    $session_id = session_id(); // Записываем в переменную id сессии
    $name = strip_tags(htmlspecialchars($name)); // Записываем в переменную безопасное значение имени
    $phone = strip_tags(htmlspecialchars($phone)); // Записываем в переменную безопасное значение телефона
    $address = strip_tags(htmlspecialchars($address)); // Записываем в переменную безопасное значение адреса
    $sql = "INSERT INTO `orders` (`name`, `phone`, `address`, `session_id`) VALUES ('{$name}', '{$phone}', '{$address}', '{$session_id}')";
    // Записываем в переменную sql запрос на добавление данных пользователя в таблиу orders

    if (executeQuery($sql)) { // Если запрос успешен
        session_regenerate_id(); // Генерируем новое значение сессии
        return true;
    }

    return false;
}