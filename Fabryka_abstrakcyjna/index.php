<?php
include_once './MySQLManager.php';

$MySQLManager = new MySQLManager();
$MySQLManager->connect();
$MySQLManager->executQuery();
$MySQLManager->insert_id();