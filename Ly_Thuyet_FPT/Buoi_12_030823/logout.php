<?php
include_once 'connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE ID='$id'";
$stmt = $connection->prepare($sql);
$stmt->execute();
$products = $stmt->fetch(PDO::FETCH_ASSOC);

unset($_SESSION['username']);
header("location: login.php");