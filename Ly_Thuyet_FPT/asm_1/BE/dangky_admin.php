<?php
session_start();
include_once "connection.php";

if (!($_SESSION['admin'])) {
    header("location:login_user.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);

    $sql = "INSERT INTO admin VALUE ('','$TAIKHOAN','$MATKHAU')";
    query($sql);
    $mes = "thêm thành công tài khoản admin";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Set a background color for the body */
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        /* Style for the header */
        h2 {
            margin-top: 20px;
            text-align: center;
            color: #333;
        }

        /* Style for the form */
        form {
            width: 50%;
            margin: 20px auto;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: white;
        }

        form input[type="text"] {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        form button {
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        /* Style for the link */
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
        }

        /* Style for success message */
        div {
            color: green;
            text-align: center;
            margin-top: 10px;
        }

        /* Media Query for responsive design */
        @media screen and (max-width: 768px) {
            form {
                width: 80%;
            }
        }
    </style>
</head>

<body>
    <h2>Tạo Tài Khoản Admin</h2>
    <div>
        <?php echo isset($mes) ? $mes : ''; ?>
    </div>
    <form action="" method="POST">
        Tài Khoản <input type="text" name="TAIKHOAN">
        <br>
        Mật Khẩu <input type="text" name="MATKHAU">
        <br>
        <button type="submit">Thêm Tài Khoản</button>
    </form>
    <a href="list.php">Quay Lại Trang Quản lý Danh Mục</a>
</body>

</html>