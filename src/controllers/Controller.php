<?php

namespace Ecommerce\Controllers;

class Controller
{
    protected function render($view)
    {
        include '../views/header.php';
        include('../views/' . $view . '.php');
        include('../views/footer.php');
    }
}
