<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Ecommerce\Controllers\ContactController;
use Ecommerce\Controllers\HomeController;
use Ecommerce\Controllers\ProductController;

require '../vendor/autoload.php';

$url = $_GET['url'] ?? '';
$params = $url ? explode('/', $url) : [];

// Page d'accueil
if (empty($params)) {
    (new HomeController)->index();
    exit;
}

// Routes spéciales
switch ($params[0]) {
    case 'contact':
        (new ContactController)->index();
        exit;
    case 'products':
        (new ProductController)->index();
        exit;
    case 'productDetail':
        $idProduct = $params[1] ?? null;
        (new ProductController)->productDetail($idProduct);
        exit;
    default:
        $categoryName = $params[0];
        // Gestion des filtres de couleur et de taille

       // Gestion des filtres de couleur
        if (isset($_GET['color'])) {
            $color = $_GET['color'] ?? '';
            $color_already_selected = explode(',', $color);
              if (count($color_already_selected) > 1) {
                   foreach ($color_already_selected as $colorName) {

                       (new ProductController)->colorsById($colorName);
                   }
               } else {
                   (new ProductController)->colorsById($color);
                   exit;
            }
        }

        if (isset($_GET['size'])) {
            $sizeName = $_GET['size'];
            (new ProductController)->productsFilteredBySize(sizeName: $sizeName);
            exit;
        }



        // Routes dynamiques pour catégories/sous-catégories
        if (count($params) == 1) {
            // Une seule partie : catégorie
            (new ProductController)->productsByCategory($categoryName);
        } elseif (count($params) == 2) {
            // Deux parties : catégorie/sous-catégorie
            $subCategoryName = $params[1];
            (new ProductController)->productsBySubCategory($subCategoryName);
        } else {
            // URL invalide
            http_response_code(404);
            echo "Page non trouvée";
        }
        exit;
}