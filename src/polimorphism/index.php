<?php 

use Source\Polimorphism\Payment; 
use Source\Polimorphism\CreditCard; 
use Source\Polimorphism\Pix; 
use Source\Polimorphism\Ticket; 

require '../../vendor/autoload.php'; 

$payment = new Payment();
echo $payment->effect() . PHP_EOL; 

$payment = new Ticket(); 
echo $payment->effect() . PHP_EOL; 

$payment = new CreditCard();
echo $payment->effect() . PHP_EOL; 

$payment = new Pix();
echo $payment->effect() . PHP_EOL; 

$payment = new Ticket();
echo $payment->effect() . PHP_EOL; 