<?php

$territoryes = [
    "Московская область:" => [
        "Москва",
        "Зеленоград",
        "Клин"
    ],
    "Ленинградская область:" => [
        "Санкт-Петербург",
        "Всеволожск",
        "Павловск",
        "Кронштадт"
    ]
];

echo getTerritoryes($territoryes);

function getTerritoryes($territoryes) {
    $region = "";
    foreach ($territoryes as $key => $value) {
        $region .= $key . "<br>" . implode(", ", $value) . "<br>";
    }
    return $region;
}