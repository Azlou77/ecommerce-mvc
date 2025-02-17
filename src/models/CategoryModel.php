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
        $query = "SELECT id_category, category_name 
                  FROM category";
        return $this->connexion->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllSubcategories()
    {
        $query = "SELECT *
                  FROM subcategory";
        return $this->connexion->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }
}
