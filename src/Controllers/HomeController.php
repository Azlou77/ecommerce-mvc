<?php

namespace Ecommerce\Controllers;
use Ecommerce\Controllers\Controller;
use Ecommerce\Controllers\ProductController;
use Ecommerce\Models\ProductModel;

class HomeController extends Controller
{
    private $productModel;


    public function __construct()
    {
        $this->productModel = new ProductModel();
       
    }
    public function index()
    {

       
        $this->render('index', compact('tab_latestProducts'));
    
    }
}
