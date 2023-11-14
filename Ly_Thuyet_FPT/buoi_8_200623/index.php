<?php
require_once "connection.php";
// SQL

$sql = "SELECT * FROM category";
// Sự chuẩn bị
$stmt = $conn->prepare($sql);
// Chạy
$stmt->execute();
// Lấy dữ liệu
$category = $stmt->fetchAll(PDO::FETCH_NUM);
// FETCH_ASSOC lấy ra mảng liên kết
// FETCH_NUM lấy ra mảng tuần tự

echo "<pre>";
var_dump($category);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục</title>
</head>

<body>

</body>

</html>