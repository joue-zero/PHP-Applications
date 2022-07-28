<?php

include_once 'Dbh.class.php';
    class signup extends Dbh {

        // Get User
        protected function checkUser($name, $email) : bool
        {
            $db = $this->connect()->prepare("SELECT name FROM users WHERE name = ? OR email = ?");
            $db->execute([$name, $email]);
            if($db->rowCount() > 0){
                return true;
            }
            return false;
        }

        protected function insertUser($name, $pass, $email, $date)
        {
            $db = $this->connect()->prepare("INSERT INTO users(name, pass, email, date) VALUES(:name, :pass, :email, :date)");
            $db->bindValue(':name', $name);
            $db->bindValue(':pass', sha1($pass));
            $db->bindValue(':email', $email);
            $db->bindValue(':date', $date);
            if($db->execute()){
                return true;
            }
        }
    }