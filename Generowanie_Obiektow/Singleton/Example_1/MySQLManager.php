<?php

class MySQLManager {

    private static $instance;
    private $host;

    public function __construct() {
        if (!self::$instance) {
            self::$instance = $this;
            echo "Nowy egzemplarz\n";
            return self::$instance;
        } else {
            echo "\n\nStary egzemplarz\n";
            return self::$instance;
        }
    }

    public function setHost($host) {
        //Konfiguracja servera bazy danych
        $this->host = $host;
    }

    public function getHost() {
        return $this->host;
    }

    public function setDB($db) {
        //Konfiguracja nazwy bazy danych
        echo $db;
    }

    public function setUserName($user) {
        //Konfiguracja nazwy użytkownika bazy danych
        echo $user;
    }

    public function setPassword($pwd) {
        //Konfiguracja hasła bazy danych
        echo $pwd;
    }

    public function connect() {
        //nawiązywanie połączenia z bazą danych
        echo "<br />Łączymy się MySQL-em";
    }
}
