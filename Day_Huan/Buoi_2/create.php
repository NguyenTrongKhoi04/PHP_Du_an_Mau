<?php
include_once "../Ket_Noi_Csdl.php";

$sql = "CREATE table NHAN_VIEN (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    TEN VARCHAR(50),
    TUOI INT,
    NOISINH VARCHAR(100),
    ANH VARCHAR(100)
)";

$stmt= $connection->prepare($sql);
$stmt->execute();