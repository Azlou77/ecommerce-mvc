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

        return $this->connexion->query('SELECT id, name, price FROM product')->fetchAll(PDO::FETCH_ASSOC);
    }
}
