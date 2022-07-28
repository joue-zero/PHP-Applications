<?php

    if(isset($_POST['Login'])){
        require_once "../classes/loginContr.class.php";
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        $user = new loginContr($name, $pass);
        $user->viewUser();

        header('LOCATION: ../index.php?error=none');
    }