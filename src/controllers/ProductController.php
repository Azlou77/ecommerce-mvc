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

    private function getAllSubcategories()
    {
        return $this->categoryModel->getAllSubcategories();
    }
    // private function getProductsByCategory($categoryName)
    // {
    //     return $this->productModel->getProductsByCategory($categoryName);
    // }

    private function getProductsBySubCategory($subCategoryName)
    {
        return $this->productModel->getProductsBySubCategory($subCategoryName);
    }

    public function index()
    {
        $tab_products = $this->getAllProducts();
        $tab_categories = $this->getAllCategories();
        $tab_subcategories = $this->getAllSubcategories();
        $this->render('product', compact('tab_products', 'tab_categories', 'tab_subcategories'));
    }



    public function productsBySubCategory($categoryName)
    {
        $tab_productsBySubCategory = $this->getProductsBySubCategory($categoryName);
        $tab_subcategoriesFilter  = $this->getAllSubcategories();
        $tab_categories = $this->getAllCategories();
        $this->render('productSubByCategory', compact('tab_productsBySubCategory', 'tab_categories', 'tab_subcategoriesFilter'));
    }
}
