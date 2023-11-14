<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $pass=$_POST['pass'];

//   $a=($email=="admin@fpt.edu.vn") ? 'thành công ' : '';
//   echo $a;
//   $b=($pass=="1234@abc")? 'thành công' : '';

    $a = ($email=="admin@fpt.edu.vn"&&$pass=="1234@abc")? 'Bạn đăng nhập thành công' : 'Bạn nhập sai mật khẩu hoặc tài khoản';
    // echo $a;

    // if($email=="admin@fpt.edu.vn"){
    //     echo"oke";
    // }else{echo"sai";};
}
?>
<!-- cho thiết kế form đăng nhập
    gồm email, mk, 
    đăng nhập => kiểm tra email và mật khẩu nếu email là admin@fpt.edu.vn và mk là 1234@abc 
    => hiển thị thông báo cháo mừng b đã đăng nhập thành công 
    ngược lại hiển thị thông báo "email hoặc mk ko chính xác" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post">
 
        Email
        <input type="email" name="email" required value="">
        <br>
        password
        <!-- <input type="password"  placeholder="<PASSWORD>" required=""> -->
            <input type="password" name="pass" required>
        <br>
        <button type="submit">Đăng ký</button>
        <br>
     <?= $a ?>
    </form>
</body>
</html>