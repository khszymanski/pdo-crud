<?php

class User extends Dbh{
    public function getAllUsers(){

        // CREATE QUERY - SHOW ALL USERS FROM DATABASE
        $stmt = $this->connect()->query("SELECT * FROM users");

        // WHILE LOOP WITH DATA FROM DATABASE
        while($row = $stmt->fetch()){

            // RETURN COMPLETE VIEW AND DATA
            echo 'ID: <b>'.$row['idu'].'</b> / First name: <b>'.$row['firstName'].'</b> / Last name: <b>'.$row['lastName'].'</b> / Nick: <b>'.$row['nick'].'</b> / City: <b>'.$row['city'].'</b><br>';
        }
    }

    public function getUsersWithCountCheck(){

        // ASSIGN VALUES TO VARS
        // THEY WILL BE USE TO QUERY
        $idu = 1;
        $firstName = 'Jan';

        // PREPARE STATMENTS - MORE SECURE
        // DON'T ASSIGN VALUES TO QUERY
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE idu=? AND firstName=?");

        // SEND VALUES TO QUERY AND EXECUTE IT
        $stmt->execute([$idu, $firstName]);

        if($stmt->rowCount()){
            while($row = $stmt->fetch()){
                return $row['firstName'];
            }
        }
    }
}

?>