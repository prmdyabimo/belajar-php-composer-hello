<?php 

namespace Prmdyabimo\Belajar;

class Customer {

    public function __construct(public string $name)
    {
        
    }

    public function sayCustomer(string $name = "Guest"): string
    {
        return "Hello Customer $name, my name is $this->name" . PHP_EOL;
    }

}

?>