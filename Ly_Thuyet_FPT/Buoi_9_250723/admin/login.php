<?php
session_start();
require_once "../../buoi_8_200623/connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '') {
        $error['username'] = "tk không được để trống";
    } else {
        $sql = "SELECT * FROM users WHERE username= '$username'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // nếu username đúng
        if ($user) {
            // kiểm tra mật khẩu 
            if ($user['password'] == $password) {
                $_SESSION['username'] = $username;
                header("location:list_product.php");
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
</body>

</html>