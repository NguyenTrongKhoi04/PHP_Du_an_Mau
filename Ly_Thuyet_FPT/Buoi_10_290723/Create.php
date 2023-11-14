<?php
include_once "connection.php";

// $sql = "CREATE DATABASE BAI10; USE BAI10";
// $stmt = $connection->prepare($sql);
// $stmt->execute();

// $sql = "USE BAI10";
// $stmt = $connection->prepare($sql);
// $stmt->execute();

// $sql = "CREATE TABLE Majors (
//         ID INT PRIMARY KEY AUTO_INCREMENT,
//         MARJORS_NAME VARCHAR(50)
//     )";
// $stmt = $connection->prepare($sql);
// $stmt->execute();

// $sql = "CREATE TABLE Profiles (
//     ID INT PRIMARY KEY AUTO_INCREMENT,
//     FULLNAME VARCHAR(50) not null,
//     AVATAR  VARCHAR(500) ,
//     BIRTHDAY DATE ,
//     EMAIL VARCHAR(500),
//     ADDRESS VARCHAR(500),
//     HOBBIES VARCHAR(500),
//     SKILL VARCHAR(500),
//     MAJORS_ID INT  ,
//     foreign key(MAJORS_ID) references MAJORS(ID)
// )";
// $stmt = $connection->prepare($sql);
// $stmt->execute();


// $sql = "INSERT INTO MAJORS VALUE 
//     ('','WEB'),
//     ('','JAVA')";
// $stmt = $connection->prepare($sql);
// $stmt->execute();

// $sql = "INSERT INTO Profiles VALUE 
//     ('','Khoi','','2023-06-17','','','','','1'),
//     ('','Tu','','2023-06-17','','','','','1')
//     ";
// $stmt = $connection->prepare($sql);
// $stmt->execute();


// $sql = "SELECT * FROM MAJORS";
// $stmt = $connection->prepare($sql);
//    $stmt->execute();
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);

// $sql = "drop table Profiles";
// $stmt = $connection->prepare($sql);
// $stmt->execute();
