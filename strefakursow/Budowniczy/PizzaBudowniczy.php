<?php

class Pizza {

    protected $size;
    protected $tomato = false;
    protected $extraCheese = false;
    protected $beacon = false;
    
    public function __construct($pizzaBuilder) {
        $this->size = $pizzaBuilder->size;
        $this->tomato = $pizzaBuilder->tomato;
        $this->extraCheese = $pizzaBuilder->extraCheese;
        $this->beacon = $pizzaBuilder->beacon;
    }
    
    public function getName(){
        return 'Pizza';
    }
}

/**
 * Budowniczy Pizzy
 */
class PizzaBuilder {
    
    public $size;
    
    public $tomato = false;
    public $extraCheese = false;
    public $beacon = false;

    /*
     * W konstruktorze budowiczego ustawiamy parametr 
     * wyłącznie dla wymaganego pola wykorzystywanego w każdej budowanej klasie
     */
    public function __construct($size) {
        $this->size = $size;
    }

    /*
     * Pola niewymagane, opcjonalne pobiera i ustawia składnik pizzy na true
     */
    
    public function addTomato(){
        $this->tomato = true;
        return $this;
    }
    
    public function addExtraCheese(){
        $this->extraCheese = true;
        return $this;
    }
    
    public function addBeacon(){
        $this->beacon = true;
        return $this;
    }
    
    public function build(){
        return new Pizza($this);
    }
}

$pizza = (new PizzaBuilder('small'))
        ->addBeacon()
        ->addExtraCheese()
        ->addTomato()
        ->build();

print_r($pizza);
