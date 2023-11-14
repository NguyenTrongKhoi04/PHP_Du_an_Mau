<?php
session_start();
include_once "../../asm_1/BE/connection.php";
$id = $_GET['id'];
// var_dump($_SESSION);// kiểm tra SESSION
// var_dump($_SESSION['admin']['ID']);

$sql = "DELETE FROM gio_hang WHERE ID='$id'";
query($sql);
$mes = "Xóa Thành công";

header("location:gio_hang.php?mes=$mes");