<?php 

namespace Source\Payment; 

interface PaymentInterface 
{
    public function createPlan(array $data): bool; 
    public function findClientById(string $id): ?object; 
    public function makePayment(array $data): bool; 
}