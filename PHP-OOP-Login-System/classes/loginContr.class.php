<?php
    require_once "login.class.php";
    class loginContr extends login{
        private string $name;
        private string $pass;

        public function __construct($name, $pass){
            $this->name = $name;
            $this->pass = $pass;
        }
        public function viewUser(){
            if(!$this->emptyInput()){
                $arr = $this->checkUser($this->name, $this->pass);

                if($arr){
                    echo '<pre>';
                    print_r($arr);
                    echo '</pre>';
                } else {
                    header("LOCATION: ../index.php?error=Enter_Valid_Username_Or_Password");
                    exit();
                }
            }else{
                header('LOCATION: ../index.php?error=Empty_Input');
                exit();
            }

        }

        private function emptyInput(): bool
        {
            if($this->name && $this->pass){
                return false;
            }
            return true;
        }
    }