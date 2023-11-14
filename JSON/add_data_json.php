<?php
// Tạo một mảng PHP
$data = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

// Chuyển đổi mảng PHP thành chuỗi JSON
$json_data = json_encode($data);

// Lưu chuỗi JSON vào một tệp
$filename = 'test.json';
file_put_contents($filename, $json_data);

echo "Dữ liệu đã được ghi vào tệp JSON.";
