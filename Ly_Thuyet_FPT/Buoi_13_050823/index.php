<?php
include_once "connection.php";
$sql = "SELECT 
            f.flight_id as flight_id_ten,
            f.flight_number,
            f.image,
            f.airline_id,
            f.total_passengers,
            f.description,
            a.airline_name 
            FROM flights f
            inner join airlines a on (f.airline_id = a.airline_id);
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
    <table border="1">
        <tr>
            <th>flight_id</th>
            <th>flight_number</th>
            <th>image</th>
            <th>total_passengers</th>
            <th>description</th>
            <th>airline_name</th>
            <th><a href="add.php">Thêm</a></th>
        </tr>
        <?php foreach ($results as $i) : ?>
            <tr>
                <td><?= $i['flight_id_ten'] ?></td>
                <td><?= $i['flight_number'] ?></td>
                <td><img src="img/<?= $i['image'] ?>"> </td>
                <td><?= $i['total_passengers'] ?></td>
                <td><?= $i['description'] ?></td>
                <td><?= $i['airline_name'] ?></td>
                <td>
                    <a href="   ">Sửa</a>
                    <a href="">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>