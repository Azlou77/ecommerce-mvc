<?php

namespace Ecommerce\Models;

use PDO;
use App\Database;

class ProductModel
{
    private $connexion;

    public function __construct()
    {
        $this->connexion = new Database();
    }

    public function getAllProducts()
    {
        return $this->connexion->query("SELECT id_product, product_name, price, img FROM product")->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function getProductsByCategory($categoryName)
    // {
    //     $query = "SELECT product.*, category.category_name FROM product 
    //               INNER JOIN category ON product.cat = category.id_category 
    //               WHERE category.category_name = :cat_name";
    //     $params = [':cat_name' => $categoryName];
    //     return $this->connexion->query($query, $params)->fetchAll(PDO::FETCH_ASSOC);
    // }

    public function getProductsBySubCategory($subCategoryName)
    {
        $query = "SELECT product.*, subcategory.subcategory_name FROM product 
                  INNER JOIN subcategory ON product.subcat = subcategory.id_subcategory 
                  WHERE subcategory.subcategory_name = :subcat_name";
        $params = [':subcat_name' => $subCategoryName];
        return $this->connexion->query($query, $params)->fetchAll(PDO::FETCH_ASSOC);
    }
}
