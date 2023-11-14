<?php

/** 
 * Kết nối đến cơ sở dữ liệu làm việc
 */

// Thông tin của cơ sở dữ liệu

$host = "localhost";
$dbname = "wc18318_php1";
$username = "root";
$password = "";

// Kết nối

try {
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Lỗi kết nối đến SQL" . $e->getMessage();
}