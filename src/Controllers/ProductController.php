<?php

namespace Ecommerce\Controllers;
use Exception;
use Ecommerce\Models\ProductModel;
use Ecommerce\Models\CategoryModel;
use Ecommerce\Controllers\Controller;

class ProductController extends Controller
{
    private $productModel;
    private $categoryModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }

    
    public function index()
    {
        $tab_products = $this->productModel->getAllProducts();
       
        $tab_categories = $this->productModel->getAllCategories();
        $tab_subcategories = $this->categoryModel->getAllSubcategories();
        $this->render('products', compact('tab_products', 'tab_categories', 'tab_subcategories'));
    }

   
    private function getProductDetail($idProduct)
    {
        return $this->productModel->getOneProduct($idProduct);
    }
    public function productDetail($idProduct)
    {
        $product = $this->getProductDetail($idProduct);
        $this->render('productDetail', compact('product'));
    }


   
    private function getProductsByCategory($categoryName)
    {
        return $this->productModel->getProductsByCategory($categoryName);
    }

     public function productsByCategory($categoryName)
    {
        $tab_productsByCategory = $this->getProductsByCategory($categoryName);
        $tab_colors = $this->productModel->getAllColors();
        $tab_subcategories  = $this->categoryModel->getAllSubcategories();
        $tab_categories = $this->categoryModel->getAllCategories();
        $this->render('productsByCategory', compact('tab_productsByCategory', 'tab_colors','tab_subcategories', 'tab_categories'));
    }

    private function getProductsBySubCategory($subCategoryName)
    {
        return $this->productModel->getProductsBySubCategory( $subCategoryName);
    }

    public function productsBySubCategory($subCategoryName)
    {
        $tab_productsBySubCategory = $this->getProductsBySubCategory( $subCategoryName);
        $tab_colors = $this->productModel->getAllColors();
        $tab_subcategories  = $this->categoryModel->getAllSubcategories();
        $tab_categories = $this->categoryModel->getAllCategories();
        $this->render('productsSubByCategory', compact('tab_productsBySubCategory', 'tab_colors', 'tab_subcategories', 'tab_categories'));
    }

    

    private function getFilteredProductsByColor($idColor)
    {
        return $this->productModel->getFilteredProductsByColor($idColor);
    }

    public function productsFilteredByColor($idColor)
    {
        $tab_productsByColor = $this->getFilteredProductsByColor($idColor);
        $tab_colors = $this->productModel->getAllColors();
        $tab_subcategories = $this->categoryModel->getAllSubcategories();
        $tab_categories = $this->categoryModel->getAllCategories();
        $this->render('productsFilteredByColor', compact('tab_productsByColor', 'tab_colors', 'tab_subcategories', 'tab_categories'));
    }

    private function getFilteredProductsByPriceRange($priceMin, $priceMax)
    {
        return $this->productModel->getFilteredProductsByPriceRange($priceMin, $priceMax);
    }

    public function productFilteredByPriceRange()
    {
        if (isset($_GET['priceRange'])) {
            $priceRange = explode('-', $_GET['priceRange']);
            $priceMin = $priceRange[0];
            $priceMax = $priceRange[1];
            $products = $this->getFilteredProductsByPriceRange($priceMin, $priceMax);
            $tab_subcategories = $this->categoryModel->getAllSubcategories();
            $tab_categories = $this->categoryModel->getAllCategories();
            $this->render('productFilteredByPriceRange', compact('products', 'tab_subcategories', 'tab_categories'));
        }
    }
   
}
