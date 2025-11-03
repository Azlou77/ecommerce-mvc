<?php
use Ecommerce\Controllers\ContactController;
use Ecommerce\Controllers\HomeController;
use Ecommerce\Controllers\ProductController;




require '../vendor/autoload.php';
$url = $_GET['url'] ?? '';

/* Séparation url en paramètres
   Example http://ecommerce.local/shoes = 1 paramètre(shoes)
   Example http://ecommerce.local/shoes/mocassin 2 paramètres (shoes + mocassin)
*/
$params = $url ? explode('/', $url) : [];


$idProduct = $_GET['idProduct'] ?? null;
$categoryName = $_GET['categoryName'] ?? '';

http://ecommerce.local/
if (empty ($params)) {
	(new HomeController)->index();
	
}

if ($url && $params[0] != '') {
	switch ($_GET['url']) {
		case 'contact':
			(new ContactController)->index();
			break;
		case 'product':
			(new ProductController)->index();
			break;
		case 'productDetail':
			(new ProductController)->getProduct($idProduct);
			break;
		
		

		default:
			http_response_code(404);
			echo "Page not found";
	}
}

// Produits d'une catégorie: ecommerce.local/shoes
if (count($params) === 1) {
    $categorySlug = $params[0];
    
    (new ProductController)->productsByCategory($categorySlug);
    exit;
}





