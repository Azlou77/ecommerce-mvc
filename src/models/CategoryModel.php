<?php

namespace Ecommerce\Models;

use PDO;
use App\Database;

class CategoryModel
{
    private $connexion;

    public function __construct()
    {
        $this->connexion = new Database();
    }

    public function getAllCategories()
    {
        return $this->connexion->query("SELECT id_category, category_name FROM category")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllSubCategory($categoryIDParent)
    {
        $query = "SELECT id_category, category_name, id_category_parent, is_active 
                  FROM category 
                  WHERE id_category_parent = :id_category_parent";
        $params = [':id_category_parent' => $categoryIDParent];
        return $this->connexion->query($query, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function isActive($categoryID)
    {
        $query = "SELECT is_active FROM category WHERE id_category = :id_category";
        $params = [':id_category' => $categoryID];
        $result = $this->connexion->query($query, $params)->fetch(PDO::FETCH_ASSOC);
        return $result['is_active'] ?? false;
    }
}
