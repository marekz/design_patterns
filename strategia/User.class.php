<?php

class User {

    private $notifyType = array('sms','fax','email');
    private $typeID;
    
    public function __construct($typeID) {
        $this->typeID = $typeID;
    }
    
    public function getNotifier() {
        return $this->notifyType[$this->typeID];
    }
}
