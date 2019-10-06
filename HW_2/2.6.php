<?php

function power($val, $pow) {
    if ($pow != 0) {
        return $val * power($val, $pow - 1);
    } else {
        return $val;
    }
}

echo power(2, 1) . "<br>";
echo power(2, 3);