<?php
/*
 * Функция подготовки переменных для передачи их в шаблон
 */
function prepareVariables($page, $action, $id)
{
//Переменная для ВСЕХ страниц
    $params = ['login' => 'admin'];

//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
    switch ($page) {
        case 'index':
            $params['name'] = 'Клен';
            break;

        case 'newspage':
            $content = getNewsContent($_GET['id']);
            $params['prev'] = $content['prev'];
            $params['text'] = $content['text'];
            break;

        case 'news':
            $params['news'] = getNews();
            break;

        case 'gallery':
            $params['images'] = getGallery();
            break;

        case 'image':
            $id = $_GET['id'];
            addLike($id);
            $params['image'] = getOneImage($id);
            break;

        case 'feedback':
            doFeedbackAction($params, $action, $id);

            $params['feedback'] = getAllFeedback();
            break;

        case 'catalog':
            $params['catalog'] = [
                [
                    'name' => 'Пицца',
                    'price' => 24
                ],
                [
                    'name' => 'Чай',
                    'price' => 1
                ],
                [
                    'name' => 'Яблоко',
                    'price' => 12
                ],
            ];
            break;

        case 'apicatalog':
            $params['catalog'] = [
                [
                    'name' => 'Пицца',
                    'price' => 24
                ],

                [
                    'name' => 'Яблоко',
                    'price' => 12
                ],
            ];

            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            exit;
            break;

    }

    return $params;
}

function render($page, $params = [])
{
    return renderTemplate(LAYOUTS_DIR . 'main', [
            'content' => renderTemplate($page, $params),
            'menu' => renderTemplate('menu')
        ]
    );
}


function renderTemplate($page, $params = [])
{
    ob_start();

    if (!is_null($params))
        extract($params);

    $fileName = TEMPLATES_DIR . $page . ".php";

    if (file_exists($fileName)) {
        include $fileName;
    } else {
        Die("Такой страницы не существует. 404");
    }

    return ob_get_clean();
}