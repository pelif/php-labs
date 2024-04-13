<?php 

namespace Source\Polimorphism; 

class Payment 
{
    public function effect(): string
    {
        return "Common Payment"; 
    }
}