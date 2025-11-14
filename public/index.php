<?php

use Ecommerce\Controllers\ContactController;
use Ecommerce\Controllers\HomeController;
use Ecommerce\Controllers\ProductController;

require '../vendor/autoload.php';

$url = $_GET['url'] ?? '';
$params = $url ? explode('/', $url) : [];

// Page d'accueil
if (empty($params)) {
    (new HomeController)->index();
    exit; // Important : arrêter l'exécution
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
        $subCategoryName = $params[1] ?? null;
        $color = $params[1] ?? null;
        // Routes dynamiques pour catégories/sous-catégories
        if (count($params) == 1) {
            // Une seule partie : catégorie
            (new ProductController)->productsByCategory($categoryName);
        
        } elseif (count($params) == 2) {
            // Deux parties : catégorie/sous-catégorie
            (new ProductController)->productsBySubCategory($subCategoryName);
        

        } elseif (count($params) == 2) {
        // Deux parties : catégorie?couleur=valeur
        (new ProductController)->productsFilteredByColor($color);
        

        } else {
            // URL invalide : afficher 404
            http_response_code(404);
            echo "Page non trouvée";
        }
        exit;
}