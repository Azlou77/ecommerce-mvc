<?php

namespace Ecommerce\Controllers;
use Ecommerce\Controllers\Controller;
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

    
    public function index()
    {
        $tab_products = $this->productModel->getAllProducts();
        $tab_categories = $this->productModel->getAllCategories();
        $tab_subcategories = $this->categoryModel->getAllSubcategories();
        $this->render('product', compact('tab_products', 'tab_categories', 'tab_subcategories'));
    }

    public function getProductsFromCart()
    {
        $tab_productsCart = $this->productModel->getProductsFromCart();
        $this->render('cart', compact('tab_productsCart'));
    }

    public function getProduct($idProduct)
    {
        $product = $this->productModel->getOneProduct($idProduct);
        $this->render('productDetail', compact('product'));
    }


    private function getProductsBySubCategory($subCategoryName)
    {
        return $this->productModel->getProductsBySubCategory($subCategoryName);
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
        $tab_categories = $this->categoryModel->getAllCategories();
        $this->render('productFilteredByColor', compact('products', 'tab_subcategories', 'tab_categories'));
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
    public function showLatestProducts()
    {
        $tab_productsBySubCategory = $this->productModel->getProductsBySubcategory('derniers');
        $this->render('home', compact('tab_productsBySubCategory'));
    }
}
