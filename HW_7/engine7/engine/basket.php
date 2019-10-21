<?php

/* Файл с функциями корзины */
function getBasket()
{
    $session_id = session_id();
    $sql = "";

    return $result;
}

// Запрос на количество товаров в корзине, по сессии.
function getBasketCount()
{
    return 4;
}

// Помещаем товар с id = $id в корзину, по сессии.
//function addToBasket($id) {
//
//}

//function deleteFromBasket($id) {
//
//}