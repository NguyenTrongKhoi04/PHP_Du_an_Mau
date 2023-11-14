<?php
$username="root";
$password="";
$host="localhost";
$database= "khoi";
$a=new mysqli($host,$username,$password,$database);
if($a->connect_error){
    die();
}else var_dump($a);
echo 1;