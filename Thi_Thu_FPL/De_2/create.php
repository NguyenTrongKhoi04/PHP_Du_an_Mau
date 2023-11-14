<?php
include_once "connection.php";

// $sql="CREATE TABLE the_loai(
//     id_the_loai int primary key auto_increment,
//     ten_the_loai varchar(100000)
// )";

// query($sql);

$sql = "CREATE TABLE sach(
    id_sach int auto_increment primary key,
    ten_sach varchar(1000),
    tac_gia varchar(1000),
    nam_xuat_ban int,
    nha_xuat_ban varchar(1000),
    hinh_anh varchar(10000),
    id_the_loai int,
    foreign key (id_the_loai) references the_loai(id_the_loai)
)";
query($sql);

// $sql="INSERT INTO the_loai Value
//  ('','Tieu thuyet'),
//  ('','khoa hoc')";
// query($sql);