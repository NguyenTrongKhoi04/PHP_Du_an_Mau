<?php
session_start();
include_once "connection.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);
    if ($TAIKHOAN == '') {
        $mes = "Tài khoản không được để tróng";
    } else {
        $sql = "SELECT * FROM user WHERE TAIKHOAN = '$TAIKHOAN' ";
        $user = SelectOne($sql);
        if ($user) {
            if ($user['MATKHAU'] = $MATKHAU) {
                $_SESSION["admin"] = $user;
                header("location:../../ASM1/FE/blog.php");
                    // giỏ hàng =>> gồm thông tin và nút thanh toán =>> hóa đơn
                exit;
            } else {
                $mes = 'Bạn nhập sai mật khẩu';
            }
        } else {
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
    <style>
      
    </style>
</head>

<body>
    <div>
        <?php echo isset($mes) ? $mes : ''; ?>
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
            <p><a href="login_admin.php">Đăng nhập với tư cách quản trị viên</a></p>
    </div>
</body>

</html>