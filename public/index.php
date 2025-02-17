<?php

use Ecommerce\Controllers\BlogController;
use Ecommerce\Controllers\CategoryController;
use Ecommerce\Controllers\ContactController;
use Ecommerce\Controllers\HomeController;
use Ecommerce\Controllers\ProductController;
use Ecommerce\Controllers\SubCategoryController;

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
} elseif ($url && $url == 'subcategory') {
	$subcategory = new SubCategoryController();
	$subcategory->index();
} elseif ($url && $url == 'subcategoryByCategory') {
	$subcategory = new SubCategoryController();
	$subcategory->subcategoriesByCategory($url);
} elseif ($url) {
	$product = new ProductController();
	$product->productsByCategory($url);
} else {
	$home = new HomeController();
	$home->index();
}
