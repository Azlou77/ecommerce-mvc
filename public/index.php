<?php

use Ecommerce\Controllers\BlogController;
use Ecommerce\Controllers\CategoryController;
use Ecommerce\Controllers\ContactController;
use Ecommerce\Controllers\HomeController;
use Ecommerce\Controllers\ProductController;


require '../vendor/autoload.php';

$url = $_GET['url'] ?? null;

if ($url && $url == 'blog') {
	$blog = new BlogController();
	$blog->index();
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
	$product->productsBySubCategory($url);
} else {
	$home = new HomeController();
	$home->index();
}
