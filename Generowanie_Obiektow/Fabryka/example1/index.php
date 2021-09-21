<?php

include_once './DBManager.php';

$dm = new DBManager("serwer","uzytkownik","baza_danych","haslo");

$dm->setDriver("pgsql");
$dm->connect();