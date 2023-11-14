<?php
    $username="root";
    $password="";
    $dbname="bai10";
    $host="localhost";

    try{
        $connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $mess){
        echo "Error connecting to database:". $mess->getMessage();
    }
    