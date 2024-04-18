<?php 

namespace Tests\Source\Composition;

use PHPUnit\Framework\TestCase;
use Source\Composition\CustomProduct;

class CustomCartTest extends TestCase
{
    public function testAttributes()
    {
        $customProduct = new CustomProduct(
            name: "Product 01"
        );

        $this->assertEquals("Product 01", $customProduct->getName()); 

        $customProduct->changeName(
            name: "New Name"
        ); 

        $this->assertEquals("New Name", $customProduct->getName()); 

    }
}