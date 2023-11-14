<?php
include_once "connection.php";

// // Tạo bảng Categories
// $sql = "CREATE TABLE Categories(
//     ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     LOAI VARCHAR(500) NOT NULL UNIQUE
// )";
// query($sql);

// Tạo bảng Products
// $sql = "CREATE TABLE Products(
//     ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     TEN VARCHAR(500) NOT NULL ,
//     ANH VARCHAR(1000000) NOT NULL,
//     THONGTIN VARCHAR(10000000),
//     MALOAI INT NOT NULL,
//     GIA INT ,
//     FOREIGN KEY (MALOAI)  REFERENCES Categories(ID)
// )";
// query($sql);

// Tạo bảng Users
// $sql = "CREATE TABLE User(
//     ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     TAIKHOAN VARCHAR(500) NOT NULL,
//     MATKHAU VARCHAR(500) NOT NULL,
//     FULLNAME VARCHAR(500) NOT NULL,
//     AVATAR VARCHAR(100000) NOT NULL,
//     NGAYSINH DATE,
//     EMAIL VARCHAR(1000) UNIQUE,
//     ADDRESS VARCHAR(500) 
// )";
// query($sql); 

// // Tạo bảng admin
// $sql = "CREATE TABLE Admin(
//     ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     TAIKHOAN VARCHAR(500) NOT NULL UNIQUE,
//     MATKHAU VARCHAR(500) NOT NULL
// )";
// query($sql);

// Tạo bảng giỏ hàng
// $sql = "CREATE TABLE Gio_Hang(
//     ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     MATAIKHOAN INT NOT NULL,
//     MASANPHAM INT NOT NULL,
//     FOREIGN KEY (MATAIKHOAN)  REFERENCES user(ID),
//     FOREIGN KEY (MASANPHAM)  REFERENCES  Products(ID)
// )";
// query($sql);

// Tạo bảng hóa đơn
// $sql = "CREATE TABLE Hoa_Don(
//     ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     Ma_Don_Gio_Hang INT NOT NULL,
//     FOREIGN KEY (Ma_Don_Gio_Hang)  REFERENCES Gio_Hang(ID)
// )";
// query($sql);
// //Xóa bảng
// $sql="DROP TABLE Gio_Hang";
// query($sql);