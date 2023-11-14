<?php
include_once "connection.php";

// $sql = 'Create database Lab_2_du_an_mau;
//         use Lab_2_du_an_mau';
// query($sql);

$sql = 'Create table khach_hang(
    ma_kh nvarchar(50) primary key,
    ho_ten nvarchar(100) not null,
    mat_khau nvarchar(100) not null,
    hinh nvarchar(50),
    kich_hoat bit,
    vai_tro bit
)';
query($sql);

// $sql = 'CREATE TABLE loai (
//     ma_loai INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     ten_loai NVARCHAR(100)
// )';
// query($sql);

// // Tạo bảng hang_hoa
// $sql = 'CREATE TABLE hang_hoa (
//     ma_hh INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     ten_hh VARCHAR(50) NOT NULL,
//     don_gia FLOAT NOT NULL,
//     giam_gia INT,
//     hinh NVARCHAR(50),
//     ngay_nhap DATE NOT NULL,
//     mo_ta NVARCHAR(2000) NOT NULL,
//     dac_biet BIT,
//     so_luot_xem INT DEFAULT 0,
//     ma_loai INT NOT NULL,
//     FOREIGN KEY (ma_loai) REFERENCES loai(ma_loai)
// )';
// query($sql);

$sql='create table binh_luan(
    ma_bl int not null primary key auto_increment,
    noi_dung nvarchar(255) not null,
    ma_hh int,
    ma_kh nvarchar(50),
    FOREIGN KEY (ma_kh) REFERENCES khach_hang(ma_kh),
    FOREIGN KEY (ma_hh) REFERENCES hang_hoa(ma_hh)
)';
query($sql);