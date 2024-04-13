<?php 

namespace Source\Polimorphism; 

class Ticket extends Payment 
{
    public function effect(): string
    {
        return "Pagamento Via Boleto"; 
    }
}