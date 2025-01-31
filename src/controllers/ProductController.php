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

    private function getProductsByCategory()
    {
        return $this->productModel->getProductsByCategory();
    }
    public function index()
    {
        $tab_products = $this->getAllProducts();
        $tab_productsCategory = $this->getProductsByCategory();
        $this->render('product', compact('tab_products', 'tab_productsCategory'));
    }
}
