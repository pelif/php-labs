<?php 

use Source\Association\Product; 
use Source\Association\Category;

require '../../vendor/autoload.php'; 

$product = new Product('Notebook Acer Nitro 5', 5500.00, 'Notebook Gamer'); 
$category = new Category('Gamer', 111); 

$product->setCategory($category); 
var_dump($product); 