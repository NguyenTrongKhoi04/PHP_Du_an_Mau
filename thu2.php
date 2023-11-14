<?php
class MyClass {

    public function __construct() {
        echo "Hàm tạo được gọi.";
    }

    public function __destruct() {
        echo "Hàm hủy được gọi.";
    }
    
}

// Tạo đối tượng
$obj = new MyClass();

// Output: "Hàm tạo được gọi."

// Khi đối tượng không còn được sử dụng nữa
unset($obj);

// Output: "Hàm hủy được gọi."
