<?php
require_once "../../buoi_8_200623/connection.php";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];

    $id = $_POST['id'];
    $image = $_POST['image']; // tên ảnh cũ

    // xử lý file
    $file = $_FILES['image'];
    // câp nhật ảnh
    $file = $_FILES['image'];
    if ($file['size'] > 0) {
        // A new file is uploaded, move it to the "img" directory
        $image = $file['name'];
        move_uploaded_file($file["tmp_name"], "../img/" . $image);
    } else {
        // No new file is uploaded, retain the old image name
        $image = $_POST['image'];
    }
    // $sql = "INSERT INTO product(product_name,image, price,quantity,description,category_id) VALUES 
    // ('$product_name','$image', '$price','$quantity','$description','$category_id')";

    //sửa dữ liệu sql
    $sql = "UPDATE product set product_name='$product_name', image='$image', price='$price', quantity='$quantity', description='$description', category_id='$category_id' where id = $id";


    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $massege= "cạp nhật thành công ";
}


//Lấy dữ liệu từ bảng category
//sql
$sql = "SELECT * FROM category";
//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi
$stmt->execute();
//Lays dữ liệu
$category = $stmt->fetchAll(PDO::FETCH_ASSOC);

// edit
// lấy thông tin id
$id = $_GET['id'];
//SQL
$sql = "SELECT * FROM product WHERE id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetch(PDO::FETCH_ASSOC);


?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="color: red;">
    <?= $massege ?? ''?>
</div>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $products['id'] ?>">
        <input type="text" name="product_name" placeholder="Tên sản phẩm" value="<?= $products['product_name'] ?>">
        <br>
        <input type="file" name="image">
        <input type="hidden" name="image" value="<?= $products['image'] ?>">
        <br>
        <input type="number" name="price" placeholder="Giá" value="<?= $products['price'] ?>">
        <br>
        <input type="number" name="quantity" placeholder="Số lượng" value="<?= $products['quantity'] ?>">
        <br>
        <textarea name="description" id="" cols="100" rows="6" placeholder="Mô tả"value="<?= $products['description'] ?>"></textarea>
        <br>
        <select name="category" id="">
            <?php foreach ($category as $cate) : ?>
                <option value="<?= $cate['id'] ?>" <?= ($cate['id'] == $products['category_id']) ? 'seleted' : '' ?>>
                    <?= $cate['name'] ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Cập nhật</button>
        <a href="list_product.php">Danh sách</a>
    </form>
</body>

</html>