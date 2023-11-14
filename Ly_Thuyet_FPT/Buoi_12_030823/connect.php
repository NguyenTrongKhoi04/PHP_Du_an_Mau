<?php
$username="root";
$host="localhost";
$dbname="bai10";
$password="";

try{
    $connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $mes){
    echo "ERROR".$mes->getMessage();
    die;
}