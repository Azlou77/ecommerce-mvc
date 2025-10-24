<?php

namespace Ecommerce\Controllers;
use Ecommerce\Controllers\Controller;


class HomeController extends Controller
{

    public function index()
    {

        $this->render('index');
    }
}
