<?php
include_once "Ket_Noi_Csdl.php";

$sql = "SELECT * FROM ten WHERE ID = 1 ";
// xác định có phải khóa chính =>> fetch
//có lệnh sql =>> chuẩn bị =>> thực thi
$stmt = $connection->prepare($sql); // $stmt = chuẩn bị $sql
$stmt->execute();
$products = $stmt->fetch(PDO::FETCH_ASSOC) ;
            // tương đương với 1 bảng

if($_SERVER['REQUEST_METHOD']==="POST"){
    // trong điều kiện if luôn ít nhất có 2 "="

    extract($_POST);
    $anh= $_FILES['anhdaidien'];
    extract($_FILES);
    // $ID = $_POST['ID'];

    $sql="INSERT INTO ten VALUE ('3','$ten')";
    $stmt = $connection->prepare($sql);
    $stmt->execute();

    // fetch hay fetchALL =>> SELECT
    // lấy dữ liệu =>> LẤY 

    $thongbao = "thêm thành công";
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
    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
         

                <tr>
                    <td><?= $products['ID'] ?></td>
                    <td><?= $products['ten'] ?></td>
                </tr>
            
        </tr>
    </table>

                <!-- thêm dữ liệu -->
    <form action="" method="POST">
        ID: <input type="text" name="ID">
        <br>
        ảnh <input type="file" name="anhđaiien">
        <br>
        ten: <input type="text" name="ten">
        <button type="submit" >Thêm mới</button>
    </form>
    <span><?= $thongbao ?></span>
</body>
</html>