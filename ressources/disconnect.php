<?php


    session_start();
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
        header('Location: ../results/login.php');
    }else{
        header('Location: ../results/login.php');
    }


?>