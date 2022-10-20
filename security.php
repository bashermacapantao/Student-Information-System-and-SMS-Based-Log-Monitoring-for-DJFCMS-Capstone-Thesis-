<?php
session_start();
// include('database/connectdb.php');

    if(!$_SESSION['username'])
    {   
        // $_SESSION['status'] = "Please Fill-up to access";
        header('Location: login.php');
    }
?>