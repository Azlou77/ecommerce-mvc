<?php

namespace Ecommerce\Controllers;

use Ecommerce\Models\CategoryModel;
use Ecommerce\Models\ProductModel;

class ProductController extends Controller
{
    private $productModel;
    private $categoryModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }

    private function getAllProducts()
    {
        return $this->productModel->getAllProducts();
    }

    private function getAllCategories()
    {
        return $this->categoryModel->getAllCategories();
    }

    private function getProductsByCategory($categoryId)
    {
        return $this->productModel->getProductsByCategory($categoryId);
    }

    public function index()
    {
        $tab_products = $this->getAllProducts();
        $tab_categories = $this->getAllCategories();
        $this->render('product', compact('tab_products', 'tab_categories'));
    }

    public function productsByCategory($categoryId)
    {
        $tab_productsByCategory = $this->getProductsByCategory($categoryId);
        $tab_categories = $this->getAllCategories();
        $this->render('productByCategory', compact('tab_productsByCategory', 'tab_categories'));
    }
}
