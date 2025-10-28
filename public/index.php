<?php

use Ecommerce\Controllers\CategoryController;
use Ecommerce\Controllers\ContactController;
use Ecommerce\Controllers\HomeController;
use Ecommerce\Controllers\ProductController;
use Ecommerce\Controllers\UserController;



require '../vendor/autoload.php';
$url = $_GET['url'] ?? null;
$color = $_GET['color'] ?? '';
$priceRange = $_GET['priceRange'] ?? '';
$idProduct = $_GET['idProduct'] ?? null;


if ($url && $url == 'productFilteredByColor' && !empty($color)) {
	$product = new ProductController();
	$product->productFilteredByColor($color);

} elseif ($url && $url == 'productFilteredByPriceRange' && !empty($priceRange)) {
	$product = new ProductController();
	$product->productFilteredByPriceRange();

} elseif ($url && $url == 'contact') {
	$contact = new ContactController();
	$contact->index();

} elseif ($url && $url == 'product') {
	$product = new ProductController();
	$product->index();

} elseif ($url && $url == 'cart') {
	$product = new ProductController();
	$product->getProductsFromCart();

} elseif ($url == 'productDetail' && !empty($idProduct)) {
	$product = new ProductController();
	$product->getProduct($idProduct);
} elseif ($url && $url == 'category') {
	$category = new CategoryController();
	$category->index();

}   elseif ($url) {
	$product = new ProductController();
	$product->productsByCategory($categoryName);


} elseif ( $url && $url == 'register') {
	$user = new UserController();
	$user->registerUser($email, $username, $password);
	
} else {
	$home = new HomeController();
	$home->index();
}