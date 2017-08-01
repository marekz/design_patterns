<?php

include_once './IProduct.php';

class FruitStore implements IProduct {

    public function apples() {
        return "FruitStore mówi: Mamy jabłka.<br />";
    }

    public function oranges() {
        return "FruitStore mówi: Nie mamy owoców cytrusowych.<br />";
    }

}
