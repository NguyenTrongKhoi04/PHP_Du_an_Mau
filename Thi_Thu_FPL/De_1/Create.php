<?php
include_once "Connection.php";

// $sql = "CREATE TABLE airlines(
//     airline_id int PRIMARY KEY AUTO_INCREMENT,  
//     airline_name VARCHAR(1000)
//     );";
// query($sql);

// $sql = "CREATE TABLE flights(
//     flight_id int primary key AUTO_INCREMENT, 
//     flight_number int,
//     image varchar(10000),
//     total_passenged int,
//     description varchar(1000),
//     airline_id int,
//     FOREIGN KEY (airline_id) REFERENCES airlines(airline_id)   
//     );";
// query($sql);

$sql = "INSERT INTO airlines VALUE
    ('','Vietnam Airlines'),
    ('','Vietjet Air')
    ";
query($sql);
