<?php

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        include_once "../classes/signupContr.class.php";
        $name    = $_POST['name'];
        $pass    = $_POST['pass'];
        $repPass = $_POST['repPass'];
        $email   = $_POST['email'];
        $date    = $_POST['date'];
        echo $date;
        $user = new signupContr($name, $pass, $repPass, $email, $date);
        $user->signupUser();

        header('LOCATION: ../index.php?error=none');

    }