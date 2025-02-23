<?php

use Ecommerce\Controllers\BlogController;
use Ecommerce\Controllers\CategoryController;
use Ecommerce\Controllers\ContactController;
use Ecommerce\Controllers\HomeController;
use Ecommerce\Controllers\ProductController;

require '../vendor/autoload.php';
$url = $_GET['url'] ?? null;
$color = $_GET['color'] ?? '';
$priceRange = $_GET['priceRange'] ?? '';
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
} elseif ($url && $url == 'category') {
	$category = new CategoryController();
	$category->index();
} elseif ($url) {
	$product = new ProductController();
	$product->productsBySubcategory($url);
} elseif ($url == null) {
	$product = new ProductController();
	$product->showLatestProducts();
} else {
	$home = new HomeController();
	$home->index();
}