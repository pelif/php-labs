<?php 

namespace Source\Association; 

class Product 
{
    public int $category_id; 
    
    public function __construct(
        public string $name, 
        public float $price, 
        public string $description)
    {        
    }

    public function setCategory(Category $category): void
    {         
        $this->category_id = $category->id; 
    }
}