<?php
session_start();
include_once "../../ASM1/BE/connection.php";

// var_dump($_SESSION);// kiểm tra SESSION
// var_dump($_SESSION['admin']['ID']);

$sql = "SELECT 
        p.ID as ID_products,
        p.TEN,
        p.ANH,
        p.THONGTIN,
        p.MALOAI,
        p.GIA,
        C.ID as ID_categories,
        C.LOAI,
        u.ID as ID_user,
        u.TAIKHOAN, 
        u.MATKHAU,
        u.FUllNAME,
        u.AVATAR,
        u.NGAYSINH,
        u.EMAIL,
        u.ADDRESS,
        g.ID as ID_gio_hang,
        g.MATAIKHOAN,
        g.MASANPHAM
        FROM gio_hang g 
        INNER JOIN user u ON (g.MATAIKHOAN = u.ID)
        INNER JOIN products p ON (g.MASANPHAM = p.ID)
        INNER JOIN Categories C ON (p.MALOAI = C.ID)
        WHERE MATAIKHOAN='{$_SESSION['admin']['ID']}'";

$result = SelectAll($sql);
// var_dump($result);

$sql="SELECT * FROM gio_hang ";
$result_id= SelectAll($sql);
$mes=$_GET['mes'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>giỏ hàng của <?= $_SESSION['admin']['TAIKHOAN']  ?></h2>
    <h3><?= $mes ?? ''?></h3>
    <a href="../../ASM1/FE/Home.php">Quay lại trang chủ</a>
    <table border="1">
        <tr>
            <th>Tài khoản</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Thông tin</th>
            <th>Loại</th>
            <th>Giá</th>
            <th></th>
        </tr>
        <?php foreach($result as $i) :?>
        <tr>
            <td><?= $i['TAIKHOAN']?></td>
            <td><?= $i['TEN']?></td>
            <td><?= $i['TAIKHOAN']?></td>
            <td><img src="../../ASM1/BE/img/<?= $i['ANH']?>" width="50px" alt=""></td>
            <td><?= $i['LOAI']?></td>
            <td><?= $i['GIA']?></td>
            <td>
                <a href="thanh_toan.php?id=<?= $i['ID_gio_hang']?>">Thanh Toán </a>
                <br>
                <!-- <a href="delete_gio_hang.php?id=<?= $i['ID_gio_hang']?>">Xóa </a> -->
        </td>
        </tr>
        <?php endforeach ?> 
    </table>
</body>

</html>