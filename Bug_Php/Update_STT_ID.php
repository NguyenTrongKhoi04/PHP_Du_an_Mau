<?php
include_once "connection.php";

// Tạo bảng Categories
$sql = "CREATE TABLE Categories(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    LOAI VARCHAR(500) NOT NULL UNIQUE
)";
query($sql);

// Tạo bảng Products
$sql = "CREATE TABLE Products(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    TEN VARCHAR(500) NOT NULL,
    ANH VARCHAR(1000000) NOT NULL,
    THONGTIN VARCHAR(10000000),
    MALOAI INT NOT NULL,
    GIA INT ,
    FOREIGN KEY (MALOAI)  REFERENCES Categories(ID)
)";

query
query($sql);

// Tạo trigger sau khi xóa dữ liệu trong bảng Products
$sql = "CREATE TRIGGER update_product_id
AFTER DELETE ON Products
FOR EACH ROW
BEGIN
    -- Lấy ra ID của bản ghi tiếp theo có ID lớn hơn ID của bản ghi vừa bị xóa
    SET @next_id = (SELECT MIN(ID) FROM Products WHERE ID > OLD.ID);

    -- Nếu có bản ghi tiếp theo có ID lớn hơn
    IF @next_id IS NOT NULL THEN
        -- Cập nhật lại ID của bản ghi tiếp theo
        UPDATE Products SET ID = OLD.ID WHERE ID = @next_id;
    END IF;
END;
";

query
query($sql);
?>
