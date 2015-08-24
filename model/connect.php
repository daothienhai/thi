<?php
    $host = "localhost";
    $use = "root";
    $password = "";
    $database = "test";

    try{
        $connect = mysqli_connect($host, $use, $password, $database);
    } catch (Exception $exc){
        echo $exc-> getTraceAsString();
    }


?>