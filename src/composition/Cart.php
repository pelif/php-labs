<?php 

namespace Source\Composition; 

class Cart 
{
    public function __construct(public array|null $items = []) {}

    public function addItems(string $name, float $price, string $description): void
    {
        $this->items[] = new Item($name, $price, $description); 
    }

    public function getItems(): array
    {
        return $this->items; 
    }

}