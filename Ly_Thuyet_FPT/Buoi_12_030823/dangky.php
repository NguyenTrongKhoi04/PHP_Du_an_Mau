<?php
include_once "connect.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST["username"];
    $fullname =  $_POST["fullname"];
    $password =  $_POST["password"];
    $email =  $_POST["email"];
    $file =  $_FILES["avt"];

    if($file['size']>0){
        $img=$file['name'];
        move_uploaded_file ($file["tmp_name"],"img/".$img);
    }
   
    $address=$_POST['address'];

    $sql="INSERT INTO users VALUE 
        ('','$username','$fullname','$password','$email','$img','$address')";
    $stmt= $connection->prepare($sql);
    $stmt->execute();
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
    
    <form action="" method="POST" enctype="multipart/form-data">
        Username:
        <input type="text" name="username">
        <br><br>
        Fullname:
        <input type="text" name="fullname">
        <br><br>
        Password:
        <input type="password" name="password">
        <br><br>
        Email:
        <input type="email" name="email">
        <br><br>
        Avatar:
        <input type="file" name="avt">
        <br><br>
        Address:
        <input type="text" name="address">

        <button type="submit">Gửi</button>
    </form>
    <br>
    Bạn đã có tài khoản <a href="login.php">Đăng nhập</a>
</body>
</html>