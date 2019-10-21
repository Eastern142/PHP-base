<?php
function newsController(&$params, $action, $id) {

    $action = $action ?? 'news';

    switch ($action) {
        case 'news':

            $params["news"] = getNews();

            break;
        case 'newspage':
            $content = getNewsContent($id);
            $params['prev'] = $content['prev'];
            $params['text'] = $content['text'];
            break;
    }
    return render('/news/' . $action, $params);
}