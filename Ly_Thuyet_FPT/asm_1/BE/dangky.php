<?php
include_once "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Lấy tên để đặt cho biến. Vd: $TEN = $_POST['TEN'];
    extract($_POST);

    //$_POST và $_FILES là 2 mảng hoàn toàn khác nhau
    $AVATAR = $_FILES['AVATAR'];

    //validate img
    if ($AVATAR['size'] > 0) {
        $img = $AVATAR['name'];
        move_uploaded_file($AVATAR["tmp_name"], "img/" . $img);
        // var_dump($AVATAR["tmp_name"]); //kiểm tra đường dẫn tạm thời 
    }
    $img = $AVATAR['name'];
    move_uploaded_file($AVATAR["tmp_name"], "img/" . $img);

    $sql = "INSERT INTO user VALUE ('','$TAIKHOAN','$MATKHAU','$FULLNAME','$img','$NGAYSINH','$EMAIL','$ADDRESS')";
    query($sql);
    $massege = "Thêm thành công";
}
$sql = "SELECT * FROM Categories";
$result = SelectAll($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset default margins and paddings */
        body,
        h2,
        form {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            /* Fallback color in case the background image is missing */
            background-image: linear-gradient(to bottom, #6dbbff, #007bff);
            /* Blue gradient background */
        }

        h2 {
            text-align: center;
            padding: 20px 0;
            color: white;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        form input[type="text"],
        form input[type="password"],
        form input[type="date"],
        form input[type="email"],
        form input[type="file"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button[type="submit"]:hover {
            background-color: #0056b3;
            /* Darker shade of blue on hover */
        }
    </style>
</head>

<body>
<div style="color: white;text-align: center;">
        <h2><?= $massege ?? '' ?></h2>
    </div>
    <h2 style="text-align: center;">Đăng ký tài khoản</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        Tài Khoản <input type="text" name="TAIKHOAN">
        <br>
        Mật Khẩu <input type="password" name="MATKHAU">
        <br>
        <br>
        FULLNAME <input type="text" name="FULLNAME">
        <br>
        AVATAR <input type="file" name="AVATAR">
        <br>
        Ngày Sinh <input type="date" name="NGAYSINH">
        <br>
        <br>
        Email <input type="email" name="EMAIL">
        <br>
        <br>
        Address <input type="text" name="ADDRESS">
        <button type="submit" onclick="return confirm('Bạn đã kiểm tra kỹ thông tin rồi ?')">Đăng ký</button>
    </form>
        <h2><a href="login_user.php" style="color: #ccc;">Đăng nhập </a></h2>
   
</body>

</html>