<?php

include_once './MySQLManager.php';
include_once './PostgreSQLManager.php';

class DBManager {
    
    private $driver;
    private $host;
    private $db;
    private $username;
    private $password;
    
    public function __construct($host, $username, $db, $password) {
        $this->host = $host;
        $this->username = $username;
        $this->db = $db;
        $this->password = $password;
    }
    

    public function setDriver($driver)
    {
        $this->driver = $driver;
    }
    
    public function connect()
    {
        if ($this->driver == "mysql")
        {
            $mm = new MySQLManager();
            $mm->setHost($this->host);
            $mm->setDB($this->db);
            $mm->setUserName($this->username);
            $mm->setPassword($this->password);
            $this->connection = $mm->connect();
        }
        
        else if ($this->driver=="pgsql")
        {
            $pm = new PostgreSQLManager();
            $pm->setHost($this->host);
            $pm->setDB($this->db);
            $pm->setUserName($this->username);
            $pm->setPassword($this->password);
            $this->connection = $pm->connect();
        }
    }
    
}
