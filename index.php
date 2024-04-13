<?php

use Source\Aggregation\Apportionment;
use Source\Aggregation\CostCenter;
use Source\Association\Category;
use Source\Association\Product;
use Source\Composition\Cart;
use Source\Polimorphism\CreditCard;
use Source\Polimorphism\Payment;
use Source\Polimorphism\Pix;
use Source\Polimorphism\Ticket;

$loader = require __DIR__ . '/vendor/autoload.php'; 

//Polimorphism 
// $payment = new Ticket(); 
// echo $payment->effect() . PHP_EOL; 


//Association
// $product = new Product('Notebook Acer Nitro 5', 5500.00, 'Notebook Gamer'); 
// $category = new Category('Gamer', 111); 

// $product->setCategory($category); 
// var_dump($product); 


//Composition
// $cart = new Cart(); 
// $cart->addItems('Mouse Razer Orochi v1', 100.00, 'Mouse Gamer'); 
// $cart->addItems('Teclado Akko m58', 220.00, 'Teclado Gamer'); 
// var_dump($cart); 

//Aggregation
$apportionment = new Apportionment; 
$costCenter = new CostCenter('Desenvolvimento', 23.00); 
$costCenter2 = new CostCenter('Software Arquitecture', 42.00); 
$costCenter3 = new CostCenter('Marketing', 12.00); 

$apportionment->addItem($costCenter)
              ->addItem($costCenter2)
              ->addItem($costCenter3); 

foreach($apportionment->getItems() as $key => $item) {
    echo $item->name . ' --> ' . $item->percent . '%' . PHP_EOL;   
}
