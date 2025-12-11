<?php

namespace Ecommerce\Controllers;

class Controller
{
    protected function render($view, $params = [])
    {
        extract($params);
        ob_start();
        include('../views/' . $view . '.php');
        $content = ob_get_clean();
        // View template
       
        include('../views/template/template.php');

    }
}

