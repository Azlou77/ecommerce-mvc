<?php

namespace Ecommerce\Models;

use PDO;
use App\Database;

class CategoryModel
{
    private $connexion;


    public function __construct()
    {
        $this->connexion =  new Database();
    }
    public function getAllCategories()
    {

        return $this->connexion->query('SELECT id_category, category_name FROM category')->fetchAll(PDO::FETCH_ASSOC);
    }
}
