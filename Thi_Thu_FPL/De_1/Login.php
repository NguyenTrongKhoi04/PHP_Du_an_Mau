<?php
session_start();
if($_SERVER['REQUEST_METHOD']==="POST"){
    extract($_POST);
    if($tk == "admin" && $mk=='1'){
        $_SESSION['username'] = $tk;
    }
    header("location: index.php");
    
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
        Tên đăng nhập <input type="text" name="tk">
        <br>
        Mật khẩu <input type="password" name="mk">
        <br>
        <button type="submit">Gửi</button>
    </form>
</body>
</html>