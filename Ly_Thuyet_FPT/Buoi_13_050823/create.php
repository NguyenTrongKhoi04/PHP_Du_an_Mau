<?php
include_once "connection.php";

$sql = "CREATE TABLE airlines (
    airline_id int AUTO_INCREMENT PRIMARY KEY,
    airline_name VARCHAR(600)
    )";

query($sql);

$sql = "CREATE TABLE flights (
    flight_id INT AUTO_INCREMENT PRIMARY KEY,
    flight_number int,
    image VARCHAR(1000),
    total_passengers int,
    description VARCHAR(500),
    airline_id int,
    FOREIGN KEY (airline_id) REFERENCES airlines(airline_id)
    )";
query($sql);

$sql = "INSERT INTO airlines VALUE 
    ('','Vietnam Airlines'),
    ('','Vietjet Air')
";
query($sql);
