<?php

$a = mt_rand(-99, 100);
$b = mt_rand(-99, 100);

echo "a = {$a};<br>
      b = {$b};<br>";
echo "Сумма чисел: " . mathOperation($a, $b, "add") ."<br>";
echo "Разность чисел: " . mathOperation($a, $b, "reduce") ."<br>";
echo "Частное чисел: " . mathOperation($a, $b, "divide") ."<br>";
echo "Произведение чисел: " . mathOperation($a, $b, "multiply");

function add($a, $b) {
    return $a + $b;
}

function reduce($a, $b) {
    return $a - $b;
}

function divide($a, $b) {
    return $a / $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function mathOperation($a, $b, $operation) {
    switch($operation) {
        case "add": return add($a, $b);
        case "reduce": return reduce($a, $b);
        case "divide": return divide($a, $b);
        case "multiply": return multiply($a, $b);
        default: return "Неверная операция";
    }
}