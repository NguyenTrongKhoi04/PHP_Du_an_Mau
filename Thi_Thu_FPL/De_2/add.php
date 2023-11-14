<?php
include_once "connection.php";

if($_SERVER['REQUEST_METHOD']==='POST'){
    extract($_POST);
    extract($_FILES);

    $Select = $_POST['ten_the_loai'];

    $ten_anh = $hinh_anh['name'];
    move_uploaded_file($hinh_anh['tmp_name'],"img/".$ten_anh);

    $sql="INSERT INTO sach VALUE ('','$ten_sach','$tac_gia','$nam_xuat_ban','$nha_xuat_ban','$ten_anh','$Select')";
    query($sql);
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
        Nhập tên sách <input type="text" name="ten_sach">
        <br>
        Nhập tác giả <input type="text" name="tac_gia">
        <br>
        Nhập năm xuất bản <input type="int" name="nam_xuat_ban">
        <br>
        Nhập nhà xuất bản <input type="text" name="nha_xuat_ban">
        <br>
        Hình ảnh <input type="file" name="hinh_anh">
        <br>
        <select name="ten_the_loai" >
            <option hidden selected disabled>Chọn</option>
            <?php foreach($results as $i) :?>
                <option value="<?= $i['id_the_loai']?>"><?= $i['ten_the_loai'] ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Gửi</button>
    </form>    
</body>
</html>