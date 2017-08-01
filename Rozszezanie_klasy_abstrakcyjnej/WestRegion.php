<?php

include_once './IAbstract.php';

class WestRegion extends IAbstract {

    protected function giveCity() {
        $solarSavings = 2;
        $this->valueNow = 210.54 / $solarSavings;
        return $this->valueNow;
    }

    protected function giveCost() {
        return "Rattlesnake Gulh";
    }

}
