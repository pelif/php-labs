<?php 

use Source\Composition\Cart; 

require '../../vendor/autoload.php'; 

//Composition
$cart = new Cart(); 
$cart->addItems('Mouse Razer Orochi v1', 100.00, 'Mouse Gamer'); 
$cart->addItems('Teclado Akko m58', 220.00, 'Teclado Gamer'); 
var_dump($cart); 
