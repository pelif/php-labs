<?php 

namespace Source\Payment;

use Source\Payment\PaymentInterface;

class PagarMe implements PaymentInterface
{
    public function createPlan(array $data): bool
    {
        
    } 

    public function findClientById(string $id): ?object
    {

    } 

    public function makePayment(array $data): bool
    {

    } 

}