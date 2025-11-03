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


// http://ecommerce.local/
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
	
		
	}  
	$product = new ProductController;
	$product->productsByCategory($url);
	
	
	// Si 2 paramètres dans l'url
	if (count($params) == 2) {
		$categoryName = $params[0];
		$subCategoryName = $params[1];
		$subCategoryController = new ProductController;
		$subCategoryController->productsBySubCategory($categoryName, $subCategoryName);
	}
}

   



