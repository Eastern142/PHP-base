<?php
function feedbackController(&$params, $action, $id)
{

    $action = $action ?? 'feedback';

    doFeedbackAction($params, $action, $id);


    $params['feedback'] = getAllFeedback();

    switch ($action) {
        case 'edit':
            $action = 'feedback';
    }


        return render($action, $params);
}