<?php
#lấy dữ liệu từ form, sư dụng phương thức GET
#Bằng biến môi trường $_GET
$hoten= $_GET["hoten"];
$email= $_GET["email"];
echo "Họ tên: $hoten <br>";
echo "email: $email";