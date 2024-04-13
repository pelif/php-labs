<?php 

namespace Source\Composition; 

class Item 
{
    public function __construct(
        public string $name, 
        public float $price, 
        public string $description
    ) {}
}