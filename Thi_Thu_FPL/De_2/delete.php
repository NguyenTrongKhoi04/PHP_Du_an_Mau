<?php 
if(!$_COOKIE['username']){
    header("location:login.php");
}
include_once "connection.php";

$id = $_GET['id'];

$sql = "DELETE FROM sach WHERE id_sach = '$id'";

query($sql);

$mes = "xoa thanh cong";
header("location:index.php?mes=".$mes);