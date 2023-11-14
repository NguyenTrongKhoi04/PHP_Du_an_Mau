<?php
session_start();
include_once "../../ASM1/BE/connection.php";
$a=$_GET['id'];

$sql = "SELECT * FROM products WHERE ID='$a'";
$results = SelectOne($sql);

print_r($results);

// print_r($_SESSION['admin']['TAIKHOAN']);//kiểm tra session xem đúng ch

$sql = "INSERT INTO gio_hang VALUE 
        ('','{$_SESSION['admin']['ID']}','$a')";
query($sql);

$mes = '<script>alert("Thêm vào giỏ hàng thành công");</script>';
header("location:../../ASM1/FE/chitietsp.php?id=$a&&mes=$mes");

