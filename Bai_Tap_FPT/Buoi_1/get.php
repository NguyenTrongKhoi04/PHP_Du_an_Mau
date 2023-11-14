<?php
#lấy dữ liệu từ form, sư dụng phương thức GET
#Bằng biến môi trường $_GET
$hoten= $_GET["hoten"];
$diachi= $_GET["diachi"];
$email= $_GET["email"];
$sdt= $_GET["sdt"];
$pass=$_GET["pass"];

echo "Họ tên: $hoten <br>";
echo "Địa chỉ: $diachi <br>";
echo "email: $email <br>";
echo "sdt: $sdt <br>";
echo "password: $pass <br>";