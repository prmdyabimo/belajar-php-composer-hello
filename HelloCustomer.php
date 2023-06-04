<?php 

require_once __DIR__ . '/vendor/autoload.php';

use Prmdyabimo\Belajar\Customer;

$customer = new Customer("Bimo");

echo $customer->sayCustomer("Pramudya");

?>