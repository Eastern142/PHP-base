<?php

//Файл с функциями нашего движка

/*
 * Функция подготовки переменных для передачи их в шаблон
 */
function prepareVariables($page, $action, $id)
{
//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
    $params = [];

    /*
    if (is_auth()) {
        $allow = true;
        $user = get_user();
    }
*/
   // $params['allow'] = true;
   // $params['count'] = getBasketCount();

    switch ($page) {
        case 'login':
            //Действия по авторизации пользователя
            break;

        case 'logout':
            session_destroy();
            setcookie("hash");
            header("Location: /");
            break;

        case 'news':

            $params["news"] = getNews();

            break;
        case 'newspage':
            if ($action=="addlike") {

                echo json_encode(["result" => 1]);
            }
            $content = getNewsContent($id);
            $params['prev'] = $content['prev'];
            $params['text'] = $content['text'];
            break;

        case 'feedback':

            doFeedbackAction($params, $action, $id);

            $params['feedback'] = getAllFeedback();

            break;

        case 'catalog':


            $params['goods'] = getAllGoods();
            break;

        case 'item':
            $params['good'] = getOneGood($id);
            break;
    }

    return $params;
}





