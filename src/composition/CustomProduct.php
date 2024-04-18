<?php 

namespace Source\Composition;

class CustomProduct 
{
    public function __construct(
        protected string $name
    )
    {        
    }

    public function changeName(string $name): void
    {
        $this->name = $name; 
    }

    public function getName(): string
    {
        return $this->name; 
    }

}