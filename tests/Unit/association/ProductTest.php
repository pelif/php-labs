<?php 

namespace Tests\Source\Association;

use PHPUnit\Framework\TestCase;
use Source\Association\Category;
use Source\Association\Product;

class ProductTest extends TestCase
{
    protected Product $product; 
    protected Category $category; 

    public function testCreateObject(): void
    {
        $this->product = new Product(
            name: 'Product One', 
            price: 15.99, 
            description: 'Product One to Tests'
        );    

        $this->asserttrue($this->product instanceof Product);         
    }

    public function testAddCategory(): void
    {
        $this->product = new Product(
            name: 'Product One', 
            price: 15.99, 
            description: 'Product One to Tests'
        );    
        
        $this->category = new Category(
            name: 'Category of P01', 
            id: 109992
        ); 

        $this->assertTrue($this->category instanceof Category); 

        $this->product->setCategory($this->category); 

        $this->assertTrue($this->category->id === $this->product->category_id); 
    }
}