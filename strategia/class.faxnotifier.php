<?php

include_once './interafce.Notifier.php';

class FaxNotifier implements notifier {

    public function notify() {
        echo "FaxNotify";
    }

}
