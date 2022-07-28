<?php
    include "signup.class.php";

    class signupContr extends signup {
        private string $name;
        private string $pass;
        private string $passRepeated;
        private string $email;
        private string $date;

        public function __construct($name, $pass, $passRepeated, $email, $date)
        {
            $this->name = $name;
            $this->pass = $pass;
            $this->passRepeated =  $passRepeated;
            $this->email = $email;
            $this->date = $date;
        }

        public function signupUser()
        {
            if($this->checkUser($this->name, $this->email)) {
                header('LOCATION: ../index.php?error=Enter_Another_User_Or_Email');
                exit();
            }
            if($this->emptyInput()) {
                header('LOCATION: ../index.php?error=Empty_Input');
                exit();
            }
            if(!$this->passMatch()) {
                header('LOCATION: ../index.php?error=Password_Does_Not_Match');
                exit();
            }
            if(!$this->validEmail()) {
                header('LOCATION: ../index.php?error=Enter_Valid_Email');
                exit();
            }
            $this->insertUser($this->name, $this->pass, $this->email, $this->date);
        }

        private function emptyInput(): bool
        {
            if($this->name && $this->pass && $this->passRepeated && $this->email && $this->date){
                return false;
            }
            return true;
        }
        private function passMatch() : bool
        {
            if($this->pass === $this->passRepeated){
                return true;
            }
            return false;
        }

        private function validEmail(): bool
        {
            if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                return true;
            }
            return false;
        }

    }