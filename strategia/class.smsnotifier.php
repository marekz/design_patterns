<?php

include_once './interafce.Notifier.php';

class smsnotifier implements notifier {
    
    public function notify() {
        echo "SmsNotifier";
    }

}
