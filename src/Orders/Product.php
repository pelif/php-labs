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

    public function setId(string $id): Product
    {
        $this->id = $id; 
        return $this;
    }

    public function setName(string $name): Product
    {
        $this->name = $name; 
        return $this; 
    }

    public function setPrice(float $price): Product
    {
        $this->price = $price; 
        return $this; 
    }

    public function setTotal(float $total): Product
    {
        $this->total = $total; 
        return $this;          
    }

    public function getId(): string
    {
        return $this->id; 
    }

    public function getName(): string
    {
        return $this->name; 
    }

    public function getPrice(): float
    {
        return $this->price; 
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    
}