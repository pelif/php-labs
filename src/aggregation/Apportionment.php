<?php 

namespace Source\Aggregation; 

class Apportionment 
{
    protected array $items; 

    public function addItem(Item $item): Apportionment
    {
        $this->items[] = $item; 
        return $this; 
    }

    public function getItems(): array 
    {
        return $this->items; 
    }
}