<?php
include_once "connect.php";

//lấy địa chỉ id của 
$id=$_GET['id'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST["username"];
    $fullname =  $_POST["fullname"];
    $password =  $_POST["password"];
    $email =  $_POST["email"];
    $file =  $_FILES["avt"];

    if($file['size']>0){
        $img=$file['name'];
        move_uploaded_file ($file["tmp_name"],"img/".$img);
    }else{
        $img=$_POST['avt'];
    }
    

    $address=$_POST['address'];

    $sql="UPDATE users set USERNAME='$username',FULLNAME='$fullname',PASSWORD='$password',EMAIL='$email',AVATAR='$img',ADDRESS='$address' WHERE ID= $id";
    $stmt= $connection->prepare($sql);
    $stmt->execute();

}


$sql="SELECT * FROM users WHERE ID=$id";
$stmt= $connection->prepare($sql);
$stmt->execute();
$products= $stmt->fetch(PDO::FETCH_ASSOC);

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
        <input type="text" name="username" value="<?= $products['USERNAME']?>">
        <br><br>
        Fullname:
        <input type="text" name="fullname" value="<?= $products['FULLNAME']?>">
        <br><br>
        Password:
        <input type="password" name="password" value="<?= $products['PASSWORD']?>">
        <br><br>
        Email:
        <input type="email" name="email" value="<?= $products['EMAIL']?>">
        <br><br>
        Avatar:

        <input type="file" name="avt" value="<?= $img ?>">
        <input type="hidden" name="avt" value="<?= $products['AVATAR'] ?>">
        
        <br><br>
        Address:
        <input type="text" name="address" value="<?= $products['ADDRESS']?>">
        <button type="submit">Gửi</button>
    </form>
    <a href="list_admin.php">Danh Sách</a>
</body>
</html>
