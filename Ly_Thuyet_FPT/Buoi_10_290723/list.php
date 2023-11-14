<?php
include_once "connection.php";

$sql = "SELECT 
        p.ID as ID_profiles,
        p.FULLNAME,
        p.AVATAR,
        p.BIRTHDAY,
        p.EMAIL,
        p.ADDRESS,
        p.HOBBIES,
        p.SKILL,
        p.MAJORS_ID,
        m.ID,
        m.MARJORS_NAME
        FROM Profiles p
        INNER JOIN Majors m ON (p.MAJORS_ID = m.ID)";
$stmt = $connection->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$hidden = $_GET['hidden'] ?? '';
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
        <th>ID</th>
        <th>FULL NAME</th>
        <th>AVATAR</th>
        <th>BIRTHDAY</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>HOBBIES</th>
        <th>SKILL</th>
        <th>MAJORS_ID</th>
        
        <?php if($hidden==1) :?>
            <th>MARJORS</th>
   
        <?php else :?>
            <th>ACTION</th>
        <?php endif ?>
        <th><a href="add.php">Thêm</a></th>
        <?php foreach ($result as $i) : ?>
        <tr>
            <td><?= $i['ID_profiles'] ?></td>
            <td><?= $i['FULLNAME'] ?></td>
            <td><img src="img/<?= $i['AVATAR'] ?>" width="50px"></td>
            <td><?= $i['BIRTHDAY'] ?></td>
            <td><?= $i['EMAIL'] ?></td>
            <td><?= $i['ADDRESS'] ?></td>
            <td><?= $i['HOBBIES'] ?></td>
            <td><?= $i['SKILL'] ?></td>
            <td><?= $i['MAJORS_ID'] ?></td>
            <?php if($hidden==1) :?>
            <td><?= $i['MARJORS_NAME']?><a href="list.php?hidden=0" style="font-size:15px ;"> Hidden</a></td>
            <?php else :?>
                <td><a href="list.php?hidden=1">Show</a></td>
            <?php endif?>
            <td>
                <a href="edit.php?id=<?=$i['ID_profiles']?>">edit</a>
                <a href="delete.php?id=<?=$i['ID']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không')">delete</a>
            </td>
        </tr>
        <!-- <?php var_dump($i['ProfileID']); ?> -->
        <?php endforeach ?>
    </table>
</body>

</html>