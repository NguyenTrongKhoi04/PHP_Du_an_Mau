<?php
include_once "connection.php";
$id=$_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Lấy tên để đặt cho biến. Vd: $TEN = $_POST['TEN'];
    extract($_POST);

    //$_POST và $_FILES là 2 mảng hoàn toàn khác nhau
    $ANH = $_FILES['ANH'];

    //validate img
    if ($ANH['size'] > 0) {
        $img = $ANH['name'];
        move_uploaded_file($ANH["tmp_name"], "img/" . $img);
        // var_dump($ANH["tmp_name"]); //kiểm tra đường dẫn tạm thời 
    }else{
        $img= $_POST['ANH'];
    }
    $img = $ANH['name'];
    move_uploaded_file($ANH["tmp_name"], "img/" . $img);

    //giữ lại giá trị mã loại
    $sql = "SELECT * FROM products";
    $result_products = SelectOne($sql);
    $SELECT= $_POST['MALOAI'] ?? $result_products['MALOAI'];

    $sql = "UPDATE products SET TEN='$TEN',ANH='$img',THONGTIN='$THONGTIN',MALOAI='$SELECT',GIA='$GIA' Where ID='$id'";
    query($sql);
    $massege = "Sửa thành công";
}
$sql = "SELECT * FROM products WHERE ID='$id'";
$result_products = SelectOne($sql);

// in ra select để chọn
$sql = "SELECT * FROM categories";
$result = SelectAll($sql);

$sql = "SELECT
        p.ID as ID_products,
        p.TEN,
        p.ANH,
        p.THONGTIN,
        p.MALOAI,
        p.GIA,
        C.ID as ID_categories,
        C.LOAI
        FROM Products p
        INNER JOIN Categories C ON (p.MALOAI = C.ID) Where p.ID='$id'";
$result_LOAI = SelectOne($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        h3 {
            margin-bottom: 10px;
        }

        /* Form container */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Form input and select fields */
        form input,
        form select {
            display: block;
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Form submit button */
        form button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #45a049;
        }

        /* Link button */
        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            background-color: #f2f2f2;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #333;
        }

        a:hover {
            background-color: #ddd;
        }

        /* Error message */
        div {
            color: red;
            margin-bottom: 10px;
        }

        input {
            width: auto !important;
        }

        .Khoi_Nut_Nhan {

            margin: 20px auto;
            width: 510px;
        }

        .Nut_Nhan {
            display: flex;
            width: 505px;

            justify-content: space-between;
            align-items: center;
        }

        .Nut_Nhan>button {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
        }

        .Nut_Nhan>button>a {
            border: none;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center;">Nhập thông tin sửa đổi</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        TEN <input type="text" name="TEN" value="<?= $result_products['TEN'] ?>">
        <br>
        ANH <input type="file" name="ANH" >
         <input type="hidden" name="ANH" value="<?= $result_products['ANH'] ?>">
        <br>
        THONG TIN <input type="text" name="THONGTIN" value="<?= $result_products['THONGTIN'] ?>">
        <br>
        GIA <input type="number" name="GIA" value="<?= $result_products['GIA'] ?>">
        <br>
        LOAI <select name="MALOAI">
            <option disabled selected hidden><?= $result_LOAI['LOAI'] ?? 'chọn'?></option>
            <?php foreach ($result as $i) : ?>
            <option value="<?= $i['ID']?>"><?= $i['LOAI'] ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit" onclick="return confirm('Bạn đã kiểm tra kỹ thông tin rồi ?')">Sửa</button>
    </form>
    <div class="Khoi_Nut_Nhan">
        <div class="Nut_Nhan">
            <button><a href="list.php">Về trang quản lý</a></button>
            <button><a href="add_categories.php">Thêm Loại Sản Phẩm mới</a></button>
            <button class="danh_sach-btn"><a href="list.php">Danh Sách</a></button>
        </div>
    </div>
    <div style="color: green;text-align: center;">  
        <?= $massege ?? '' ?>
    </div>
</body>

</html>