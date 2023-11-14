<?php



function connection()
{
    $username = "root";
    $host = "localhost";
    $dbname = "day_huan";
    $password = "";
    try {
        $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $mes) {
        echo "ERROR" . $mes->getMessage();
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