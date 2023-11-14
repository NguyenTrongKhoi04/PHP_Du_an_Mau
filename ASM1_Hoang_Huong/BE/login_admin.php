<?php
session_start();
include_once "connection.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);
    if ($TAIKHOAN == '') {
        $mes = "Tài khoản không được để tróng";
    } else {
        $sql = "SELECT * FROM admin WHERE TAIKHOAN = '$TAIKHOAN' ";
        $user = SelectOne($sql);
        if($user){
            if($user['MATKHAU']=$MATKHAU){
                $_SESSION["admin"]=$user;
                header("location:list.php?id=$user[ID]");
                exit;
            }else{
                $mes = 'Bạn nhập sai mật khẩu';
            }
        }else{
            $mes = 'Bạn nhập sai tài khoản';
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
<div>
        <?php echo isset($mes)?$mes:''; ?>
    </div>
    <form action="" method="POST">
        Tài Khoản<input type="text" name="TAIKHOAN">
        <br>
        Mật Khẩu <input type="text" name="MATKHAU">
        <br>
        <button type="submit">Đăng nhập</button>
    </form>
    <div>
        Bạn chưa có tài khoản ?<a href="dangky.php">Đăng ký</a>
            <p>Bạn là khách hàng <a href="login_user.php">Đăng nhập</a></p>
    </div>
</body>

</html>