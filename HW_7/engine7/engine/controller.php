<?php

/* Файл контроллера */
/*
 * Функция подготовки переменных для передачи их в шаблон
 */
function prepareVariables($page, $action, $id)
{
// Переменная для ВСЕХ страниц.
//    $params = ['login' => 'admin'];
    $params = ["count" => getBasketCount()];

    if (is_auth()) {
        $params['allow'] = true;
        $params['user'] = get_user();
    }

// Для каждой страницы подготавливается массив со своим набором переменных для подстановки их в соотвествующий шаблон
    switch ($page) {

        case 'auth':
            if ($action == "login") {

                if (isset($_POST['send'])) {
                    $login = $_POST['login'];
                    $pass = $_POST['pass'];

                    if (!auth($login, $pass)) {
                        Die('Не верный логин пароль');
                    } else {

                        if (isset($_POST['save'])) {
                            $hash = uniqid(rand(), true);
                            $db = get_db();
                            $id = mysqli_real_escape_string($db, strip_tags(stripslashes($_SESSION['id'])));
//                            $sql = "UPDATE `users` SET `hash` = '{$hash}' WHERE `users`.`id` = {$id}";
                            $result = mysqli_query($db, $sql);
                            setcookie("hash", $hash, time() + 3600);

                        }
                        $allow = true;
                        $user = get_user();
                    }
                }
                exit;
            }
            break;

        case 'logout':
            session_destroy();
            setcookie("hash");
            header("Location: /");
            break;

        // Пример URL: /api/buy/5
        case 'api':

            if ($action == "buy") {
//                addToBasket($id);
//                var_dump($id);
                echo json_encode(["result" => 1, "count" => getBasketCount()]);
                exit;
            }
            if ($action == "delete") {
//                deleteFromBasket($id);
//                var_dump($id);
                echo json_encode(["result" => 1, "count" => getBasketCount()]);
                exit;
            }

            break;

        case 'index':
            $params['name'] = 'Power To Play';
            break;

        case 'goods':
            $params['goods'] = getGoods();
            break;

        case 'goods_item':
            $params['goods_item'] = getGoodsItem($id);
            break;

        case 'gallery':
            $params['images'] = getImages();
            break;

        case 'gallery_item':
            addLike($id);
            $params['images_item'] = getFullImage($id);
            break;

        case 'news':
            $params['news'] = getNews();
            break;

        case 'newspage':
            $content = getNewsContent($id);
            $params['prevew'] = $content['prevew'];
            $params['full'] = $content['full'];
            break;

        case 'feedback':
            doFeedbackAction($params, $action, $id);
            $params['feedback'] = getAllFeedback();
            break;

        case 'basket':
            $params['goods'] = getBasket();
            break;

    }

    return $params;
}