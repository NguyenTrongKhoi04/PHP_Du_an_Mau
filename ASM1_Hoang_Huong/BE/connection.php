<?php


 function connection(){
    try{
        $connection= new PDO("mysql:host=localhost;dbname=ASM_2",'root','');
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $connection;
    }catch(PDOException $mess){
        echo "ERROR: ". $mess->getMessage();
        die;
    }
 }

 function query($sql){  
    $connection = connection();
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    return $stmt;
 }

 function SelectAll($sql){
    $stmt = query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

 function SelectOne($sql){
   $stmt = query($sql);
   return $stmt->fetch(PDO::FETCH_ASSOC);
 }