<?php
// Đường dẫn đến tệp JSON
$filename = 'test.json';

// Kiểm tra xem tệp tồn tại không
if (file_exists($filename)) {
    // Đọc nội dung tệp JSON
    $json_data = file_get_contents($filename);

    // Chuyển đổi chuỗi JSON thành mảng PHP
    $data = json_decode($json_data, true);

    if ($data === null) {
        echo 'Lỗi khi phân tích dữ liệu JSON.';
    } else {
        // Dữ liệu đã được chuyển đổi thành mảng PHP
        print_r($data);
    }
} else {
    echo 'Tệp JSON không tồn tại.';
}
?>
