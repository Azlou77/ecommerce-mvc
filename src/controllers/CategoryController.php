<?php

namespace Ecommerce\controllers;

use Ecommerce\Models\CategoryModel;

class CategoryController extends Controller
{
    private $categoryModel;


    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    private function getAllCategories()
    {
        return $this->categoryModel->getAllCategories();
    }

    private function getAllSubcategories()
    {
        return $this->categoryModel->getAllSubcategories();
    }

    public function index()
    {
        $tab_subcategories = $this->getAllSubcategories();
        $tab_categories = $this->getAllCategories();
        $this->render('category', params: compact('tab_categories', 'tab_subcategories'));
    }
}
