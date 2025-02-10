<?php

namespace Ecommerce\controllers;

use Ecommerce\Models\ProductModel;

class ProductController extends Controller
{
    private $productModel;



    public function __construct()
    {
        $this->productModel = new  ProductModel();
    }
    private function getAllProducts()
    {
        return $this->productModel->getAllProducts();
    }

    public function index()
    {
        $tab_products = $this->getAllProducts();
        $this->render('product', compact('tab_products'));
    }
}
