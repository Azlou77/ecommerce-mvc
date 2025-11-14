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
        return $this->connexion->query("SELECT * FROM product")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getOneProduct($idProduct)
    {
        $query = "SELECT * FROM product WHERE id_product = :idProduct";
        $params = [':idProduct' => $idProduct];
        return $this->connexion->query($query, $params)->fetch(PDO::FETCH_ASSOC);
    }

    public function getProductsFromCart()
    {
        return $this->connexion->query("SELECT product_name, price, img FROM product")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductsByCategory($categoryName)
    {
        $query = "SELECT product.*, category.category_name FROM product 
                  INNER JOIN category ON product.cat = category.id_category 
                  WHERE category.category_name = :categoryName";
        $params = [':categoryName' => $categoryName];
        return $this->connexion->query($query, $params)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsBySubCategory($subCategoryName)
    {
        $query = "SELECT product.*, 
                    subcategory.subcategory_name, 
                    subcategory.id_subcategory, 
                    category.category_name, 
                    category.id_category 
                    FROM product 
                    INNER JOIN subcategory ON product.subcat = subcategory.id_subcategory
                    INNER JOIN category ON subcategory.cat = category.id_category 
                    WHERE subcategory.subcategory_name = :subCategoryName";

        $params = [':subCategoryName' => $subCategoryName];

        return $this->connexion->query($query, $params)->fetchAll(PDO::FETCH_ASSOC);
    }



    public function getAllCategories()
    {

        return $this->connexion->query("SELECT * FROM category")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllColors()
    {
        return $this->connexion->query("SELECT  DISTINCT color FROM product")->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getFilteredProductsByColor($color)
    {

        $query = "SELECT * FROM product WHERE color = :color";
        $params = [':color' => $color];
        return $this->connexion->query($query, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFilteredProductsByPriceRange($priceMin, $priceMax): array
    {

        $query = "SELECT * FROM product WHERE price BETWEEN :priceMin AND :priceMax";
        $params = [
            ':priceMin' => $priceMin,
            ':priceMax' => $priceMax
        ];
        return $this->connexion->query($query, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

}
