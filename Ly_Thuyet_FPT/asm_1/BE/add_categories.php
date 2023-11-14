<?php
include_once "connection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // biến để add nghành mới 
    $New_Loai = $_POST['New_Loai'] ?? '';

    if (!($New_Loai == '')) {
        $sql = "INSERT INTO Categories value ('','$New_Loai')";
        query($sql);
        $massege= "cạp nhật thành công ";// thông báo cho người dùng biết
    }else{
        $massege= "không được để trống loại hàng";
    }

}

$sql = "SELECT * FROM categories";
$result = SelectAll($sql);
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
h3 {
    margin-top: 20px;
    text-align: center;
    color: #333;
}

/* Style for the table */
table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    border: 1px solid #ccc;
    background-color: white;
}

table th, table td {
    padding: 8px;
    border: 1px solid #ccc;
    text-align: center;
}

table th {
    background-color: #007bff;
    color: white;
}

/* Style for the form */
form {
    width: 80%;
    margin: 20px auto;
    text-align: center;
}

form input[type="text"] {
    padding: 8px;
    width: 70%;
    border: 1px solid #ccc;
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

/* Style for error messages */
div[style="color: red;"] {
    color: red;
    margin: 10px;
    text-align: center;
}

/* Media Query for responsive design */
@media screen and (max-width: 768px) {
    table {
        width: 100%;
    }
}

    </style>
</head>

<body>
    <div style="color: red;">
        <?= $massege ?? '' ?>
    </div>
    <h3>Danh sách các loại hàng</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>LOAI</th>
        </tr>
        <?php foreach($result as $i) :?>
        <tr>
            <td><?= $i['ID'] ?></td>
            <td><?= $i['LOAI'] ?></td>
        </tr>
        <?php endforeach;?>
    </table>
    <h3 style="text-align: center;">Nhập loại hàng mới</h4>
    <form action="" method="POST">
        Nhập Loại Hàng mới  <input type="text" name="New_Loai">
        <button type="submit">Gửi</button>
    </form>

    <h2><a href="list.php">Về trang quản lý</a></h2>
</body>

</html>