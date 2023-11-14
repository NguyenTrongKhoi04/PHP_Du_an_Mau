<?php
$hoten = $_POST['hoten'];
$sdt = $_POST['sdt'];
$email = $_POST['email'];
$diachi = $_POST['diachi'];
$mon = $_POST['mon'];
if($mon==1){
    $mon="Văn";
}if($mon==1){
    $mon="Anh";
}if($mon==1){
    $mon="Lý";
}

echo "Họ tên: $hoten <br>";
echo "Địa chỉ: $diachi <br>";
echo "email: $email <br>";
echo "sdt: $sdt <br>";
echo "Môn chọn: $mon <br>";