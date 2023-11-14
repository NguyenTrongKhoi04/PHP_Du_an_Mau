<?php
session_start();
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '') {  
        $error['username'] = "tk không được để trống";
    } else {
        $sql = "SELECT * FROM admin WHERE USERNAME= '$username'";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            // kiểm tra mật khẩu 
            if ($user['PASSWORD'] == $password) {
                $_SESSION['username'] = $username;
                header("location:list_admin.php");
                exit;
            } else {
                $error['password'] = 'mật khẩu không đúng';
            }
        } else {
            $error['username'] = 'Tài khoản ko đúng';
        }
    }
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
    <form action="" method="POST">
        <span style="color: red; font-size: 15px;">
            <?= $error['username'] ?? '' ?>
            <?= $error['password'] ?? '' ?>
        </span>
        username <input type="text" name="username"><br>
        password <input type="text" name="password">
        <button type="submit">login</button>
    </form>
    <br>
    Bạn chưa có tài khoản <a href="dangky.php">Đăng ký</a>
    <br>
    <a href="login.php">Đăng nhập với tư cách khách hàng</a>
</body>

</html>