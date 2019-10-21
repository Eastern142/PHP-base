<?php
function indexController(&$params, $action, $id)
{

    $templateName = 'index';

    return render($templateName, $params);
}