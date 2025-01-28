<?php

namespace Ecommerce\Controllers;

class Controller
{
    protected function render($view)
    {
        ob_start();
        include('../views/' . $view . '.php');
        $content = ob_get_clean();
        include('../views/template/template.php');
    }
}
