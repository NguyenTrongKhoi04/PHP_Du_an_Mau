<?php
require_once "../../buoi_8_200623/connection.php";
$id= $_GET['id'];
$sql = "DELETE FROM product WHERE id=$id";
$stmt= $conn->prepare($sql);
$stmt->execute();

$message = "Xóa dữ liệu thành công";
header("location: list_product.php?message=".$message);
die();