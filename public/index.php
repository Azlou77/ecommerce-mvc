<?php

use Ecommerce\Controllers\BlogController;
use Ecommerce\Controllers\ContactController;
use Ecommerce\Controllers\HomeController;

require '../vendor/autoload.php';

$url = $_GET['url'] ?? null;
if ($url && $url == 'blog') {
	$blog = new BlogController();
	$blog->index();
} elseif ($url && $url == 'contact') {
	$contact = new ContactController();
	$contact->index();
} else {
	$home = new HomeController();
	$home->index();
}
