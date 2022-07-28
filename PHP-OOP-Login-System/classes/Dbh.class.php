<?php

    class Dbh {
        private $user = "root";
        private $pass = "";

        protected function connect(){
            try {
                $dns = "mysql:host=localhost;dbname=login;charset=UTF8";
                $db = new PDO($dns, $this->user, $this->pass);
                $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, pdo::FETCH_ASSOC);
                return $db;
            }
            catch(ErrorException $e){
                echo $e->getMessage() . "<br>";
                exit();
            }
        }
    }