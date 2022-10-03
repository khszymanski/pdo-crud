<?php

class Dbh{
    // DECLARE VARS
    private $host, $usr, $pass, $db, $charset;

    // PROTECTED FUNCTION WHICH CREATES CONNECT TO DATABASE
    public function connect(){

        // ASSIGN VALUES TO VARS
        $this->host = 'localhost';
        $this->usr = 'root';
        $this->pass = '';
        $this->db = 'github-pdo-crud';
        $this->charset = 'utf8mb4';

        // CHECK IF THERE'S AN ERROR
        try {
            // CHECK DRIVER
            // print_r(PDO::getAvailableDrivers());
            // Array ( [0] => mysql [1] => pgsql [2] => sqlite )
            // MYSQL IS A DRIVER
            $dsn = 'mysql:host='.$this->host.'; dbname='.$this->db.'; charset='.$this->charset;
            
            // CREATE CONNECTION TO DATABASE
            $pdo = new PDO($dsn, $this->usr, $this->pass);

            // SET ATTRIBUTE TO SHOW ERROR MESSAGE
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            // SHOW ERROR MESSAGE
            echo 'Connection failed: '.$e->getMessage().'<br>';
        }
    }
}

?>