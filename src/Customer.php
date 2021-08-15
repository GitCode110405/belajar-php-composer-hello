<?php

namespace GitCode\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
        
    }

    public function sayHallo(string $name = "Rifkah")
    {
        echo "Hello $name, my name is {$this->name}";
    }
}