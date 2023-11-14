<?php
session_start();
include_once "../../asm_1/BE/connection.php";
$a=$_GET['id'];

$sql = "SELECT * FROM products WHERE ID='$a'";
$results = SelectOne($sql);


$stmt = $connection->prepare($sql);
$stmt->execute();
$products= $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($results);

// print_r($_SESSION['admin']['TAIKHOAN']);//kiểm tra session xem đúng ch

$sql = "INSERT INTO gio_hang VALUE 
        ('','{$_SESSION['admin']['ID']}','$a')";
query($sql);

$mes = '<script>alert("Thêm vào giỏ hàng thành công");</script>';
header("location:../../asm_1/FE/course_detail.php?id=$a&&mes=$mes");

