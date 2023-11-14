<?php
session_start(); //nếu còn thì sẽ đăng nhập vào
require_once "../../buoi_8_200623/connection.php";

// kiểm tra đăng nhập hay chưa
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
$sql = "SELECT * FROM product";
$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="color: green; font-size: 20px;">
        <?= $_GET['message'] ?? ''; ?>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th><a href="adminproduct.php">Thêm</a></th>
            <?php foreach ($products as $pro) : ?>
        <tr>
            <td><?= $pro['id'] ?></td>
            <td><?= $pro['id'] ?></td>
            <td>
                <img src="../../Buoi_9_250723/img/<?= $pro['image'] ?>" width="120">
            </td>
            <td><?= $pro['price'] ?></td>
            <td><?= $pro['quantity'] ?></td>
            <td>
                <a href="edit_product.php?id=<?= $pro['id'] ?>">EDIT</a>
                <a onclick="return confirm('Bạn có chăc chắn muốn xóa không')" href="delete_product.php?id=<?= $pro['id'] ?>">DELETE</a>
            </td>
        </tr>
    <?php endforeach ?>
    </tr>
    </table>
</body>

</html>