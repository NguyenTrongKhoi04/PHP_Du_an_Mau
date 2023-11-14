<?php
if(!$_COOKIE['username']){
    header("location:login.php");
}
include_once "connection.php";
$mes = $_GET['mes'] ?? '';
$sql = 'SELECT 
    s.id_sach,
    s.ten_sach,
    s.tac_gia,
    s.nam_xuat_ban,
    s.nha_xuat_ban,
    s.hinh_anh,
    t.id_the_loai,
    t.ten_the_loai
    FROM sach s
    inner join the_loai t on (t.id_the_loai=s.id_the_loai) ';

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
    <div>
        <h2><?= $mes ?? ''?></h2>
    </div>
<table border="1">
    <tr>
        <th>id_sach</th>
        <th>ten_sach</th>
        <th>tac_gia</th>
        <th>nam_xuat_ban</th>
        <th>nha_xuat_ban</th>
        <th>hinh_anh</th>
        <th>ten_the_loai</th>
        <th><a href="add.php">them</a></th>
    </tr>
    <?php foreach($results as $i) :?>
    <tr>
        <td><?= $i['id_sach'] ?></td>
        <td><?= $i['ten_sach'] ?></td>
        <td><?= $i['tac_gia'] ?></td>
        <td><?= $i['nam_xuat_ban'] ?></td>
        <td><?= $i['nha_xuat_ban'] ?></td>
        <td><img src="img/<?= $i['hinh_anh'] ?>" width="80px"></td>
        <td><?= $i['ten_the_loai'] ?></td>
        <td>
            <a href="edit.php?id=<?= $i['id_sach'] ?>">Sua</a>
            <a href="delete.php?id=<?= $i['id_sach'] ?>">Xoa</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
<a href="logout.php">logout</a>
</body>
</html>