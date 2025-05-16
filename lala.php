<?php
require_once 'vendor/autoload.php';

use Lena\Zad6\Pizza;
use Lena\Zad6\PizzaStore;

$pizzaStore = new PizzaStore();
$pepperoniPizza=$pizzaStore->orderPizza("pepperoni");
echo "\n";
$veggiePizza=$pizzaStore->orderPizza("veggie");
echo "\n";
$cheesePizza=$pizzaStore->orderPizza("chesse");