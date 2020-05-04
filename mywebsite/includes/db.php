<?php

    $server='localhost';
    $user='root';
    $password='123456789';
    $db='system';

    $conn= mysqli_connect($server,$user,$password,$db);

    if(!$conn){

        die("Connection Failed:".mysqli_connect_error());

    }



?>