<?php
include_once "connect.php";
$user_id = $_GET['id'];
$sql = "SELECT * FROM users WHERE ID= '$user_id'";
$stmt = $connection->prepare($sql);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mat_khau_now = $_POST['mat_khau_now'];
    $mat_khau_new = $_POST['mat_khau_new'];
    
    if ($mat_khau_now == '') {
        $error['mat_khau_now'] = "không được để trống mật khẩu hiện tại";
    } else {
        if ($mat_khau_now == $user['PASSWORD']) {
            if($mat_khau_new==''){
                $error['mat_khau_now'] = 'mật khẩu mới ko được để trống';
            }else{
                $sql2 = "UPDATE users set PASSWORD = '$mat_khau_new' WHERE ID='$user_id'";
            $stmt2 = $connection->prepare($sql2);
            $stmt2->execute();
            echo "đổi mật khẩu thành công";
            }
        } else {
            $error['mat_khau_now'] = 'mật khẩu cũ ko đúng';
        }
    }   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Thông tin của <?= $user['USERNAME'] ?></h1>
    <form action="" method="POST">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>FULLNAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>AVATAR</th>
            <th>ADDRESS</th>


        <tr>
            <td><?= $user['ID'] ?></td>
            <td><?= $user['USERNAME'] ?></td>
            <td><?= $user['FULLNAME'] ?></td>
            <td><?= $user['PASSWORD'] ?></td>
            <td><?= $user['EMAIL'] ?></td>
            <td>
                <img src="img/<?= $user['AVATAR'] ?>" width="120">
            </td>
            <td><?= $user['ADDRESS'] ?></td>

        </tr>
        </tr>
    </table>
        <span style="color: red; font-size: 15px;">
            <?= $error['mat_khau_now'] ?? '' ?>
        </span>
        NHập mật khẩu hiện tại <input type="text" name="mat_khau_now">
        <br>
        Nhập mật khẩu mới <input type="text" name="mat_khau_new">
        <button type="submit">Thay đổi mật khẩu </button>
        
        <a href="logout.php?id=<?=$user['ID']?> ">Đăng xuất</a>
    </form>
</body>

</html>