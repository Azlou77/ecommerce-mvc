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



    public function productsBySubCategory($subCategoryName)
    {
        $tab_productsBySubCategory = $this->getProductsBySubCategory($subCategoryName); 
        $tab_subcategoriesFilter  = $this->getAllSubcategories();
        $tab_categories = $this->getAllCategories();
        $this->render('productSubByCategory', compact('tab_productsBySubCategory', 'tab_categories', 'tab_subcategoriesFilter'));
    }

    public function productFilteredByColor($color)
    {
        if ($color) {
            // Récupérer les produits correspondant à la couleur sélectionnée
            $products = $this->productModel->getFilteredProductsByColor($color);
        } else {
            $products = [];
        }

        $this->render('filteredProducts', compact('products'));
    }
    

    public function showLatestProducts()
    {
        $tab_productsBySubCategory = $this->productModel->getProductsBySubcategory('derniers');
        $this->render('home', compact('tab_productsBySubCategory'));
    }
}
