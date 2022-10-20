<?php

    $servername = 'localhost';
    $username   = 'root';
    $password   = '';
    $dbname     = 'capstoneproject';
    
    $connection   = mysqli_connect($servername, $username, $password,);
    $connectdb = mysqli_select_db($connection, $dbname);

    if($connectdb)
    {
      //  echo "Database Connected";
    }
    else
    {
        echo "Database is not connected";
    }
?>