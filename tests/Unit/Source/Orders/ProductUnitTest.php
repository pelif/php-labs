<?php 

namespace Tests\Source\Orders;

use Mockery;
use PHPUnit\Framework\TestCase;
use Source\Orders\Product;

class ProductUnitTest extends TestCase
{
    public function testExampleMock(): void
    {
        $mockProduct = Mockery::mock(Product::class, [
            'id', 'name', 155.66, 1
        ]); 

        $mockProduct->shouldReceive('getId')->andReturn('id'); 
        $mockProduct->shouldReceive('getName')->andReturn('name'); 
        $mockProduct->shouldReceive('getPrice')->andReturn(155.66); 
        $mockProduct->shouldReceive('getTotal')->andReturn(1); 

        Mockery::close(); 

        $this->assertEquals('id', $mockProduct->getId()); 
        $this->assertEquals('name', $mockProduct->getName()); 
        $this->assertEquals(155.66, $mockProduct->getPrice()); 
        $this->assertEquals(1, $mockProduct->getTotal()); 
    }
}