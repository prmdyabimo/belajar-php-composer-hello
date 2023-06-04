<?php 

namespace Prmdyabimo\Belajar;

class Customer {

    public function __construct(public string $name)
    {
        
    }

    public function sayCustomer(string $name = "Guest", int $age = 0): string
    {
        return "Hello Customer $name, my name is $this->name, and i'm $age years old" . PHP_EOL;
    }

}

?>