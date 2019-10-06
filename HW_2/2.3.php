<?php

$a = mt_rand(-99, 100);
$b = mt_rand(-99, 100);

echo "a = {$a};<br>
      b = {$b};<br>";
echo "Сумма чисел: " . add($a, $b) ."<br>";
echo "Разность чисел: " . reduce($a, $b) ."<br>";
echo "Частное чисел: " . divide($a, $b) ."<br>";
echo "Произведение чисел: " . multiply($a, $b);

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