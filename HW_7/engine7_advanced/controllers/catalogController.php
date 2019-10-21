<?php
function catalogController(&$params, $action, $id)
{
    $action = $action ?? 'catalog';

    switch ($action) {
        case 'catalog':
            $params['goods'] = getAllGoods();
            break;

        case 'item':
            $params['good'] = getOneGood($id);

            break;
    }
    return render('/catalog/' . $action, $params);
}