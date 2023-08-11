<?php
declare(strict_types=1);

require 'public/controller/ProductController.php';

session_start();

// Why?
$productController = new ProductController();

// Explain
$productController->show($_GET['productCode']);

