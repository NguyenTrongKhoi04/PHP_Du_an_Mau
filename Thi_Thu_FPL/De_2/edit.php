<?php
if(!$_COOKIE['username']){
    header("location:login.php");
}
include_once "connection.php";
$id = $_GET['id'];

$sql = "SELECT 
    s.id_sach,
    s.ten_sach,
    s.tac_gia,
    s.nam_xuat_ban,
    s.nha_xuat_ban,
    s.hinh_anh,
    t.id_the_loai,
    t.ten_the_loai
    FROM sach s
    inner join the_loai t on (t.id_the_loai=s.id_the_loai) WHERE id_sach = '$id'";

$results2 = SelectOne($sql);

if($_SERVER['REQUEST_METHOD']==='POST'){
    extract($_POST);
    extract($_FILES);

    $Select = $_POST['ten_the_loai'] ?? $results2['id_the_loai'];
    $ten_anh = $hinh_anh['name'];
    if($hinh_anh['size']>0){
        $ten_anh = $hinh_anh['name'];
        move_uploaded_file($hinh_anh['tmp_name'],"img/".$ten_anh);
    }else{
        $ten_anh = $results2['hinh_anh'];
    }  

  $sql = "UPDATE SACH SET 
        ten_sach='$ten_sach',
        tac_gia='$tac_gia',
        nam_xuat_ban='$nam_xuat_ban',
        nha_xuat_ban='$nha_xuat_ban',
        hinh_anh='$ten_anh',
        id_the_loai='$Select'
        WHERE id_sach='$id'
    ";
    query($sql);
    $mes ="update thanh cong";
    header("location:index.php?mes=".$mes);
}


$sql = "SELECT * FROM the_loai";
$results = SelectAll($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm dữ liệu</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        Nhập tên sách <input type="text" name="ten_sach" value="<?= $results2['ten_sach'] ?>">
        <br>
        Nhập tác giả <input type="text" name="tac_gia" value="<?= $results2['tac_gia'] ?>">
        <br>
        Nhập năm xuất bản <input type="int" name="nam_xuat_ban" value="<?= $results2['nam_xuat_ban'] ?>">
        <br>
        Nhập nhà xuất bản <input type="text" name="nha_xuat_ban" value="<?= $results2['nha_xuat_ban'] ?>">
        <br>
        Hình ảnh <input type="file" name="hinh_anh">

        <br>
        <img src="img/<?= $results2['hinh_anh'] ?>" width="80px">
        <br>
        <select name="ten_the_loai" >
            <option hidden selected disabled> <?= $results2['ten_the_loai'] ?> </option>
            <?php foreach($results as $i) :?>
                <option value="<?= $i['id_the_loai']?>"><?= $i['ten_the_loai'] ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Gửi</button>
    </form>    
</body>
</html>