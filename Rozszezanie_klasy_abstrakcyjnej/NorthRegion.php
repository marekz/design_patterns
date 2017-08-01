<?php

include_once './IAbstract.php';

class NorthRegion extends IAbstract {

    protected function giveCity() {
        return 210.54;
    }

    protected function giveCost() {
        return "Moose Breath";
    }

}
