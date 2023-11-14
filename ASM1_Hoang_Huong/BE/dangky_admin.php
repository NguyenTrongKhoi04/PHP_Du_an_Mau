<?php
session_start();
include_once "connection.php";

    if(!($_SESSION['admin'])){
        header("location:login_user.php");
        exit;
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        extract($_POST);

        $sql = "INSERT INTO admin VALUE ('','$TAIKHOAN','$MATKHAU')";
        query($sql);
        $mes = "thêm thành công tài khoản admin";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tạo Tài Khoản Admin</h2>
    <div>
        <?php echo isset($mes)?$mes:''; ?>
    </div>
    <form action="" method="POST">
        Tài Khoản <input type="text" name="TAIKHOAN">
        <br>
        Mật Khẩu <input type="text" name="MATKHAU">
        <br>
        <button type="submit">Thêm Tài Khoản</button>
    </form>
    <a href="list.php">Quay Lại Trang Quản lý Danh Mục</a>
</body>
</html>