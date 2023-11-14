<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("location:login.php");
    die;
}
include_once "Connection.php";

$mes=$_GET['mes']??'';
$sql = "SELECT 
        f.flight_id,
        f.flight_number,
        f.image,
        f.total_passenged,
        f.description,
        f.airline_id as id_chuyen_bay,
        a.airline_id as id_hang_bay,
        a.airline_name
        FROM flights f 
        INNER JOIN airlines a ON (f.airline_id=a.airline_id)
";

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
        <?= $mes ?? '' ?>
    </div>
    <a href="Logout.php">Đăng xuất</a>
    <table border="1">
        <tr>
            <th>flight_id</th>
            <th>flight_number</th>
            <th>image</th>
            <th>total_passenged</th>
            <th>description</th>
            <th>airline_id</th>
            <th>airline_name</th>
            <th><a href="Add.php">Thêm</a></th>
        </tr>
        <?php foreach($results as $i) :?>
            <tr>
                <td><?= $i['flight_id']?></td>
                <td><?= $i['flight_number']?></td>
                <td><img src="img/<?= $i['image']?>" width="80px"></td>
                <td><?= $i['total_passenged']?></td>
                <td><?= $i['description']?></td>
                <td><?= $i['id_chuyen_bay']?></td>
                <td><?= $i['airline_name']?></td>
                <td>
                    <a href="edit.php?id=<?= $i['flight_id']?>">Sửa</a>
                    <a href="Delete.php?id=<?= $i['flight_id']?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
        
    </table>    
</body>
</html>