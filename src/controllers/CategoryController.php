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

    private function getAllSubCategory($categoryIDParent)
    {
        return $this->categoryModel->getAllSubCategory($categoryIDParent);
    }

    private function getCategoriesWithSubCategories()
    {
        $categories = $this->getAllCategories();
        foreach ($categories as &$category) {
            $category['subCategories'] = $this->getAllSubCategory($category['id_category']);
            $category['is_active'] = $this->categoryModel->isActive($category['id_category']);
        }
        return $categories;
    }

    public function index()
    {
        $tab_categories = $this->getCategoriesWithSubCategories();
        $this->render('category', params: compact('tab_categories'));
    }
}
