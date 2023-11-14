<?php

$hoten = $_POST['hoten'];
$sdt = $_POST['date'];
$diem = $_POST['diem'];
// Tạo đối tượng DateTime từ giá trị thời gian ban đầu
$dateObj = DateTime::createFromFormat('Y-m-d', $sdt);

// Định dạng lại giá trị thời gian thành "DD-MM-YYYY"
$formattedDate = $dateObj->format('d-m-Y');
if($diem < 5){
    $hocluc="Yếu";
}elseif($diem<6){
    $hocluc ="Trung Bình";
}elseif($diem<7.5){
    $hocluc = "Khá";
}elseif($diem<9){
    $hocluc="Giỏi";
}else{
    $hocluc="Xuất sắc";
}

echo "Họ tên: $hoten <br>";
echo "Ngày sinh: $formattedDate <br>";
echo "Học lực: $hocluc <br>";