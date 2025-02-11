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

        return $this->connexion->query("SELECT id_product, product_name, price, img FROM product")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByCategory($categoryId)
    {
        return $this->connexion->query("SELECT id_category,product_name, price, img FROM product  WHERE id_category= '$categoryId'")->fetchAll(PDO::FETCH_ASSOC);
    }
}
