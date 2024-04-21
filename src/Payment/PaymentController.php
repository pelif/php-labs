<?php 

namespace Source\Payment; 

class PaymentController 
{
    private $payment; 

    public function __construct(PaymentInterface $payment)
    {        
        $this->payment = $payment; 
    }

    public function execute(): bool
    {
        return $this->payment->makePayment([]);
    }


}