<?php 

namespace Source\Association; 

class Category 
{
    public function __construct(
        public string $name, 
        public int $id
    ) {}

}