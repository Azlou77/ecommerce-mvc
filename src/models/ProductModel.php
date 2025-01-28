<?php

namespace Ecommerce\Models;

use App\Database;

class ProductModel
{
    private $productModel;

    public function __construct()
    {
        $this->productModel =  new Database();
    }
    public function getAllProducts()
    {
        return $this->productModel->query('SELECT id, nom, prix,  FROM product');
    }
}
