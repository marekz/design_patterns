<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pizza
 *
 * @author marek
 */
class Pizza {

    protected $size;
    protected $tomato = false;
    protected $extraCheese = false;
    protected $beacon = false;
    
    public function __construct($size, $tomato, $extraCheese, $beacon) {
        $this->size = $size;
        $this->tomato = $tomato;
        $this->extraCheese = $extraCheese;
        $this->beacon = $beacon;
    }
    
    public function getName(){
        return 'Pizza';
    }
}

$pizza = new Pizza('small', true, false, true);
print_r($pizza);
