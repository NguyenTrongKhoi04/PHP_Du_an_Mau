<?php
require_once "connection.php";

$id= $_GET['id'];
$sql = "DELETE FROM Profiles WHERE id=$id";
$stmt= $connection->prepare($sql);
$stmt->execute();

$message = "Xóa dữ liệu thành công";
header("location: list.php?message=".$message);
exit();
