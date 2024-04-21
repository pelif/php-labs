<?php 

namespace Source\Orders; 

class Product 
{
    public function __construct(
        public string $id, 
        public string $name, 
        public float $price, 
        public $total)
    {        
    }
}