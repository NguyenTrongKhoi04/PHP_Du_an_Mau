<?php
session_start();
include_once "../../ASM1/BE/connection.php";
$id = $_GET['id'];
// var_dump($_SESSION);// kiểm tra SESSION
// var_dump($_SESSION['admin']['ID']);

$sql = "SELECT * FROM gio_hang WHERE ID='$id'";
$result = SelectOne($sql);
$result_ID = $result['ID'];
// var_dump($result);

$sql= "INSERT INTO hoa_don VALUE ('','$result_ID')";
query($sql);
$mes = "Thanh Toán Thành công";

    header("location:gio_hang.php?mes=$mes");
