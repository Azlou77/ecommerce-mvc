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

        return $this->connexion->query('SELECT id, product_name, price, img FROM product')->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByCategory()
    {
        return $this->connexion->query('SELECT id, product_name, price, img FROM product INNER JOIN category ON product.id = category.id')->fetchAll(PDO::FETCH_ASSOC);
    }
}
