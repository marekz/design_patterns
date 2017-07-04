<?php

include_once './class.emailnotifier.php';
include_once './class.faxnotifier.php';
include_once './class.smsnotifier.php';
include_once './User.class.php';

$typeID = 2;
$user = new User($typeID);
$notifier = $user->getNotifier();

switch ($notifier)
{
    case "email":
        $objNotifier = new EmailNotifier();
        break;
    case "sms":
        $objNotifier = new smsnotifier();
        break;
    case "fax":
        $objNotifier = new FaxNotifier();
        break;
}

$objNotifier->notify();