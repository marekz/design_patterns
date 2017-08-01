<?php

include_once './IProduct.php';

class CircusStore implements IProduct {

    public function apples() {
        return "CircusStore mówi: Nie sprzedajemy jabłek.<br />";
    }

    public function oranges() {
        return "CircusStore mówi: Mamy owoce cytrusowe.<br />";
    }

}
