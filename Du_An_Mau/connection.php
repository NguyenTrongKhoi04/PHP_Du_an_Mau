<?php
    function connection(){
        try{
            $connection = new PDO("mysql:host=localhost;dbname=Lab_2_du_an_mau",'root','');
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $connection;
        }catch(PDOException $e){
            echo "ERROR: ".$e->getMessage();
        }
    }

    function query($sql){
        $connection = connection();
        $stmt= $connection->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    function SelectOne($sql){
        $stmt = query($sql);
        return  $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function SelectAll($sql){
        $stmt = query($sql);
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }