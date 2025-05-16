<?php

namespace Lena\Zad6;

use Lena\Zad6\CheesePizza;
use Lena\Zad6\PepperoniPizza;
use Lena\Zad6\PizzaStore;
use Lena\Zad6\VeggiePizza;

class ItalianPizzaStore extends PizzaStore{
    public function createPizza(string $type)
    {
        switch($type) {
        case 'chesse':
            return new CheesePizza();
            case 'pepperoni':
                return new PepperoniPizza();
                case 'veggie':
                return new VeggiePizza();
                return null;
        }
    }
}