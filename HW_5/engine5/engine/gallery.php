<?php

function getImages()
{
    $sql = "SELECT * FROM gallery ORDER BY likes DESC";
    $images = getAssocResult($sql);
    return $images;
}

//function getFullImage($id)
//{
//    $id = (int)$id;
//
//    $sql = "SELECT * FROM gallery WHERE id = {$id}";
//    $image_big = getAssocResult($sql);
//
//    // В случае если изображения нет, вернем пустое значение.
//    $result = [];
//    if (isset($image_big[0]))
//        $result = $image_big[0];
//
//    return $result;
//}

function getFullImage($id, $action)
{

    $id = (int)$id;

    $sql = "SELECT * FROM gallery WHERE id = {$id}";
    $image_big = getAssocResult($sql);

    if ($action == 'like') {
        executeQuery("UPDATE gallery SET likes = likes + 1 WHERE id = {$id}");
    }

    // В случае если изображения нет, вернем пустое значение.
    $result = [];
    if (isset($image_big[0]))
        $result = $image_big[0];

    return $result;
}