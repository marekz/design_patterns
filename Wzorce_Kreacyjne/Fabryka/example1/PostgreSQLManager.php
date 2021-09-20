<?php

class PostgreSQLManager {

    public function setHost($host) {
        //Konfiguracja servera bazy danych
        echo $host;
    }

    public function setDB($db){
        //Konfiguracja nazwy bazy danych
        echo $db;
    }
    
    public function setUserName($user){
        //Konfiguracja nazwy użytkownika bazy danych
        echo $user;
    }
    
    public function setPassword($pwd){
        //Konfiguracja hasła bazy danych
        echo $pwd;
    }
    
    public function connect(){
        //nawiązywanie połączenia z bazą danych
        echo "<br />Lecimy po postgresie";
    }
}
