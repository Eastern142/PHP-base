<?php

function getFeedbacks($id)
{

    $id = (int)$id;

    $sql = "SELECT * FROM feedback WHERE for_goods = {$id}";
    $feedbacks = getAssocResult($sql);

    $result = [];
    if (isset($feedbacks[0]))
        $result = $feedbacks;

    return $result;
}