<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("location: login_admin.php");
    exit;
}

include_once "connection.php";

$sql = "SELECT
        p.ID as ID_products,
        p.TEN,
        p.ANH,
        p.THONGTIN,
        p.MALOAI,
        p.GIA,
        C.ID,
        C.LOAI
        FROM Products p
        INNER JOIN Categories C ON (p.MALOAI = C.ID)";

$result=SelectAll($sql);

// ẩn hiện chuyên nghành
$sql = "SELECT* FROM admin WHERE ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
            font-weight: bold;
        }

        td img {
            max-width: 50px;
            max-height: 50px;
            display: block;
            margin: auto;
        }

        td:last-child {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }
    </style>

</head>

<body>
    
    <div>
        <?=$_GET['mes'] ?? '' ?>
    </div>
    <h1 style="text-align: center;">Bảng chỉnh sửa danh mục sản phẩm </h1>
    <a href="logout.php">Đăng xuất | </a>
            <a href="add_categories.php">Chỉnh sửa Loại hàng | </a>
            <a href="#">Hóa đơn Khách hàng |</a>
            <a href="dangky_admin.php">Thêm tài khoản admin</a>
    <table border="1">
        <th>ID</th>
        <th>TEN</th>
        <th>ANH</th>
        <th>THONG TIN</th>
        <th>MA LOAI</th>
        <th>GIA</th>
        <th>LOAI</th>
        
        <th><a href="add_products.php">Thêm</a></th>
        <?php foreach ($result as $i) : ?>
        <tr>
            <td><?= $i['ID_products'] ?></td>
            <td><?= $i['TEN'] ?></td>
            <td><img src="img/<?= $i['ANH'] ?>" width="50px"></td>
            <td><?= $i['THONGTIN'] ?></td>
            <td><?= $i['MALOAI'] ?></td>
            <td><?= $i['GIA'] ?></td>
            <td><?= $i['LOAI'] ?></td>
            <td>
                <a href="edit.php?id=<?=$i['ID_products']?>">edit</a>
                <a href="delete.php?id=<?=$i['ID_products']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không')">delete</a>
            </td>
        </tr>
          
        <?php endforeach ?>
    </table>  
</body>

</html>