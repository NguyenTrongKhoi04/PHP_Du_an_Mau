<?php
include_once "connection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // biến để add nghành mới 
    $New_Loai = $_POST['New_Loai'] ?? '';

    if (!($New_Loai == '')) {
        $sql = "INSERT INTO Categories value ('','$New_Loai')";
        query($sql);
        $massege= "cạp nhật thành công ";// thông báo cho người dùng biết
    }else{
        $massege= "không được để trống loại hàng";
    }

}

$sql = "SELECT * FROM categories";
$result = SelectAll($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div style="color: red;">
        <?= $massege ?? '' ?>
    </div>
    <h3>Danh sách các loại hàng</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>LOAI</th>
        </tr>
        <?php foreach($result as $i) :?>
        <tr>
            <td><?= $i['ID'] ?></td>
            <td><?= $i['LOAI'] ?></td>
        </tr>
        <?php endforeach;?>
    </table>
    <h4>Nhập loại hàng mới</h4>
    <form action="" method="POST">
        Nhập Loại Hàng mới  <input type="text" name="New_Loai">
        <button type="submit">Gửi</button>
    </form>
    <br>
    <a href="list.php">Về trang quản lý</a>
</body>

</html>