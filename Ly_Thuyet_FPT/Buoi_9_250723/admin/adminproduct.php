<?php
require_once "../../buoi_8_200623/connection.php";
//Lấy dữ liệu từ bảng category
//sql
$sql = "SELECT * FROM category";
//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi
$stmt->execute();
//Lays dữ liệu
$category = $stmt->fetchAll(PDO::FETCH_ASSOC);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $product_name= $_POST['product_name'];
    $price = $_POST['price'];
    $quantity= $_POST['quantity'];
    $description =$_POST['description'];
    $category_id =$_POST['category'];

    // xử lý file
    $file= $_FILES['image'];
    $image=$file['name'];
    move_uploaded_file ($file["tmp_name"],"../img/".$image);

    $sql = "INSERT INTO product(product_name,image, price,quantity,description,category_id) VALUES 
    ('$product_name','$image', '$price','$quantity','$description','$category_id')";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
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
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="product_name" placeholder="Tên sản phẩm">
        <br>
        <input type="file" name="image" >
        <br>
        <input type="number" name="price" placeholder="Giá">
        <br>
        <input type="number" name="quantity" placeholder="Số lượng">
        <br>
        <textarea name="description" id="" cols="100" rows="6" placeholder="Mô tả"></textarea>
        <br>
        <select name="category" id="">
            <?php foreach($category as $cate) :?>
                <option value="<?=$cate['id'] ?>"><?=$cate['name'] ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Thêm sản phẩm</button>
    </form>    
</body>
</html>