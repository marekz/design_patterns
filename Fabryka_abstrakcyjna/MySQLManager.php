<?php

include_once './DBDriver_Abstract.php';

class MySQLManager extends DBDriver_Abstract {
    
    public function connect() {
        echo "<p>Implement connect to any database</p>";
    }

    public function executQuery() {
        echo "<p>Here is query to our DB</p>";
    }

    public function insert_id() {
        echo "<p>Any methods to insert ID</p>";
    }
}