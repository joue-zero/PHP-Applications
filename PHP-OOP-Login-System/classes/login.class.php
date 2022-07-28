<?php
    require_once "Dbh.class.php";

    class login extends Dbh {
        protected function checkUser($name, $pass){
            $db = $this->connect()->prepare("SELECT * FROM users WHERE name = ? AND pass = ?");
            $db->bindValue(1, $name);
            $db->bindValue(2, sha1($pass));
            $db->execute();
            if($db->rowCount() > 0) {
                $userInfo = $db->fetch();
                session_start();
                $_SESSION['id']      = $userInfo['id'];
                $_SESSION['name']    = $userInfo['name'];
                $_SESSION['email']   = $userInfo['email'];
                $_SESSION['date']    = $userInfo['date'];
                return true;
            } else {
                return false;
            }
        }
    }