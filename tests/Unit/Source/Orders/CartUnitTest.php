<?php 

namespace Tests\Source\Orders;

use Source\Orders\Cart; 
use PHPUnit\Framework\TestCase;
use Source\Orders\Product;

class CartUnitTest extends TestCase
{

    public function testCart(): void
    {
        $cart = new Cart(); 

        $cart->add(product: new Product(
            id: '1', 
            name: 'Product Test 001', 
            price: 120.55, 
            total: 1
        )); 
        
        $cart->add(product: new Product(
            id: '1', 
            name: 'Product Test 001', 
            price: 120.55, 
            total: 1
        )); 

        $cart->add(product: new Product(
            id: '2', 
            name: 'Product Test 002', 
            price: 25.99, 
            total: 1
        )); 

        $this->assertCount(3, $cart->getItems()); 

        $this->assertEquals(267.09, $cart->total());
    }

    
}