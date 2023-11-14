<?php 
include_once "Connection.php";
$id=$_GET['id'];

$sql= "DELETE FROM flights WHERE flight_id= '$id'";
query($sql);
 $mes = "xóa thành công";
header("location: index.php?mes=".$mes);