<?php 

namespace Source\Aggregation; 

class CostCenter implements Item
{
    public function __construct(
        public string $name, 
        public float $percent
    ) {}
}