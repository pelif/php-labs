<?php 

namespace Source\Polimorphism; 

class Pix extends Payment 
{
    public function effect(): string
    {
        return "Pix Payment"; 
    }
}