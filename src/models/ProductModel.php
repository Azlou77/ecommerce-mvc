<?php

namespace Ecommerce\Models;

use PDO;
use App\Database;

class ProductModel
{
    private $connexion;


    public function __construct()
    {
        $this->connexion =  new Database();
    }
    public function getAllProducts()
    {

        return $this->connexion->query('SELECT id_product, product_name, price, img FROM product')->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByCategory($categoryId)
    {
        return $this->connexion->query('SELECT id_product, price, img, category.category_name
                    FROM product
                    INNER JOIN category ON product.id_category = category.id_category
                    WHERE category.id_category = :id_category";')->fetchAll(PDO::FETCH_ASSOC);
    }
}
