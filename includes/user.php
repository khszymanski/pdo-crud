<?php

class User extends Dbh{
    public function getAllUsers(){

        // CREATE QUERY - SHOW ALL USERS FROM DATABASE
        $stmt = $this->connect()->query("SELECT * FROM users");

        // WHILE LOOP WITH DATA FROM DATABASE
        while($row = $stmt->fetch()){

            // ASSIGN & RETURN VALUE FROM DATABASE
            $city = $row['city'];
            return $city;
        }
    }
}

?>