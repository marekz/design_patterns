<?php

include_once './interafce.Notifier.php';

class EmailNotifier implements notifier {

    public function notify() {
        echo "EmailNotify";
    }

}
