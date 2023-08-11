<?php
declare(strict_types=1);

require 'public/controllers/ProductController.php';

session_start();

// Why ?
$productController = new ProductController();

$productController->index();



    

    