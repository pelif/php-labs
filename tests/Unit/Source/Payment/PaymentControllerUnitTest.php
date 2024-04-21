<?php 

namespace Tests\Source\Payment;

use Mockery;
use PHPUnit\Framework\TestCase;
use Source\Payment\PaymentController;
use Source\Payment\PaymentInterface;
use stdClass;

class PaymentControllerUnitTest extends TestCase
{
    public function testCategory(): void
    {
        $mockPayment = Mockery::mock(stdClass::class, PaymentInterface::class); 
        
        $mockPayment
            ->shouldReceive('makePayment')
            ->times(1)
            ->andReturn(true); 

        $mockPayment
            ->shouldReceive('createPlan')
            ->andReturn(true); 

        $payment = new PaymentController($mockPayment); 
        $response = $payment->execute();

        $this->assertTrue($response);        
    }

    protected function tearDown(): void
    {
        Mockery::close(); 
        parent::tearDown(); 
    }
}