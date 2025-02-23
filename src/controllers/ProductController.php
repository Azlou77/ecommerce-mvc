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


   
   
    private function getProductsBySubCategory($subCategoryName)
    {
        return $this->productModel->getProductsBySubCategory($subCategoryName);
    }

   

    public function index()
    {
        $tab_products = $this->productModel->getAllProducts();
        $tab_categories = $this->productModel->getAllCategories();
        $tab_subcategories = $this->categoryModel->getAllSubcategories();
        $this->render('product', compact('tab_products', 'tab_categories', 'tab_subcategories'));
    }



    public function productsBySubCategory($subCategoryName)
    {
        $tab_productsBySubCategory = $this->getProductsBySubCategory($subCategoryName);
        $tab_subcategories  = $this->categoryModel->getAllSubcategories();
        $tab_categories = $this->categoryModel->getAllCategories();
        $this->render('productSubByCategory', compact('tab_productsBySubCategory', 'tab_categories', 'tab_subcategories'));
    }

    private function getFilteredProductsByColor($color)
    {
        return $this->productModel->getFilteredProductsByColor($color);
    }

    public function productFilteredByColor($color)
    {
        $products = $this->getFilteredProductsByColor($color);
        $tab_subcategories = $this->categoryModel->getAllSubcategories();
        $this->render('productFilteredByColor', compact('products', 'tab_subcategories'));
    }

    // public function productFilteredByPriceRange($priceMin, $priceMax)
    // {
    //     $products = $this->productModel->getFilteredProductsByPriceRange($priceMin, $priceMax);
    //     $this->render('productFilteredByPriceRange', compact('products'));
    // }


    

    
    

    public function showLatestProducts()
    {
        $tab_productsBySubCategory = $this->productModel->getProductsBySubcategory('derniers');
        $this->render('home', compact('tab_productsBySubCategory'));
    }
}
