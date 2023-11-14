<?php
session_start(); //nếu còn thì sẽ đăng nhập vào
require_once "connect.php";

// kiểm tra đăng nhập hay chưa
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
$sql = "SELECT * FROM users";
$stmt = $connection->prepare($sql);
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

    <table border="1">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>FULLNAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>AVATAR</th>
            <th>ADDRESS</th>
            <th><a href="add.php">Thêm</a></th>
            <?php foreach ($products as $pro) : ?>
        <tr>
            <td><?= $pro['ID'] ?></td>
            <td><?= $pro['USERNAME'] ?></td>
            <td><?= $pro['FULLNAME']?></td>
            <td><?= $pro['PASSWORD'] ?></td>
            <td><?= $pro['EMAIL'] ?></td>
            <td>
                <img src="img/<?= $pro['AVATAR'] ?>" width="120">
            </td>
            <td><?= $pro['ADDRESS'] ?></td>
            <td>
                <a href="edit.php?id=<?= $pro['ID'] ?>">EDIT</a>
                <a onclick="return confirm('Bạn có chăc chắn muốn xóa không')" href="delete.php?id=<?= $pro['ID'] ?>">DELETE</a>
            </td>
        </tr>
    <?php endforeach ?>
    </tr>
    </table>
    <a href="logout.php">Đăng xuất</a>
</body>

</html>