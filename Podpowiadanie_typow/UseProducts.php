<?php

include_once './FruitStore.php';
include_once './CircusStore.php';

class UseProducts {

    public function __construct() {
        $appleSauce = new FruitStore();
        $orangeJuice = new CircusStore();
        $this->doInterface($appleSauce);
        $this->doInterface($orangeJuice);
    }
    
    function doInterface(IProduct $product){
        echo $product->apples();
        echo $product->oranges();
    }
}

$worker = new UseProducts();
