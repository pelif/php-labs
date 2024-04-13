<?php 

namespace Source\Polimorphism; 

class CreditCard extends Payment 
{
    public function effect(): string
    {
        return "Credit Payment"; 
    }
}