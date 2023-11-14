<?php
#lấy dữ liệu từ form, sư dụng phương thức GET
#Bằng biến môi trường $_GET
$hoten= $_POST["hoten"];
$diachi= $_POST["diachi"];
$email= $_POST["email"];
$sdt= $_POST["sdt"];
$pass=$_POST["pass"];

echo "Họ tên: $hoten <br>";
echo "Địa chỉ: $diachi <br>";
echo "email: $email <br>";
echo "sdt: $sdt <br>";
echo "password: $pass <br>";