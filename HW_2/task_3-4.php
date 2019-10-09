<?php

$a = mt_rand(-99, 100);
$b = mt_rand(-99, 100);

echo "a = {$a};<br>
      b = {$b};<br>";

// если не передавать дополнительный параметр!!!
echo mathOperation($a, $b);

// если передавать дополнительный параметр!!!
//echo mathOperation($a, $b, "add");
//echo mathOperation($a, $b, "reduce");
//echo mathOperation($a, $b, "divide");
//echo mathOperation($a, $b, "multiply");

function add($a, $b) {
    return $a + $b;
}

function reduce($a, $b) {
    return $a - $b;
}

function divide($a, $b) {
    return ($b == 0) ? "Ошибка" : $a / $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function mathOperation($a, $b, $operation = '') {
    if ($operation) {
        switch($operation) {
            case "add": return "Сумма чисел: " . add($a, $b) ."<br>";
            case "reduce": return "Разность чисел: " . reduce($a, $b) ."<br>";
            case "divide": return "Частное чисел: " . divide($a, $b) ."<br>";
            case "multiply": return "Произведение чисел: " . multiply($a, $b);
            default: return "Неверная операция";
        }
    }
    return "Сумма чисел: " . add($a, $b) ."<br>" .
        "Разность чисел: " . reduce($a, $b) ."<br>" .
        "Частное чисел: " . divide($a, $b) ."<br>" .
        "Произведение чисел: " . multiply($a, $b);
}