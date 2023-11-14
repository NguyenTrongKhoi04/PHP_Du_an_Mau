<?php
include_once "connection.php";
if($_SERVER['REQUEST_METHOD']==='POST'){
    extract($_POST);
    if($tk=='ph33170' && $mk=='ph33170'){
        setcookie('username',$tk,time()+10);
        header("location:index.php");
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
        Nhap tai khoan <input type="text" name="tk">
        <br>
        Nhap mat khau <input type="text" name="mk">
        <br>
        <button type="submit">login</button>
    </form>    
</body>
</html>