<?php
include_once "connection.php";
$id= $_GET['id'];
$sql = "DELETE FROM products WHERE ID='$id'";
query($sql);
$mes = "Xóa thành công";
header("location:list.php?mes=$mes");