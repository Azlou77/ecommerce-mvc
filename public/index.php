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
    
    case 'product':
        (new ProductController)->index();
        exit;
    
    case 'productDetail':
        $idProduct = $params[1] ?? null;
        (new ProductController)->getProduct($idProduct);
        exit;
    
    default:
        // Routes dynamiques pour catégories/sous-catégories
        if (count($params) == 1) {
            // Une seule partie : catégorie
            (new ProductController)->productsByCategory($params[0]);
        } elseif (count($params) == 2) {
            // Deux parties : catégorie/sous-catégorie
            (new ProductController)->productsBySubCategory($params[1]);
        } else {
            // URL invalide : afficher 404
            http_response_code(404);
            echo "Page non trouvée";
        }
        exit;
}