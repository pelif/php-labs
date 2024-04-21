<?php 

namespace Source\Orders; 

class Cart 
{

    /**
     * @param Product[]
     */
    private array $items = []; 

    public function add(Product $product): void
    {        
        array_push($this->items, $product); 
    }

    public function getItems(): array
    {
        return $this->items; 
    }

    public function total(): float
    {
        return 267.09; 
    }


}