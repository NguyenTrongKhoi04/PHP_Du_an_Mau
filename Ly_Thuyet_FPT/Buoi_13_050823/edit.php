<?php
include_once "connection.php";
if($_SERVER['REQUEST_METHOD']==='POST'){
    extract($_POST);
    extract($_FILES);

    print_r($_POST);
    $img_name= $image['name'];
    move_uploaded_file( $_FILES["image"]["tmp_name"], "img/".$img_name);

    $sql = "INSERT INTO flights VALUE ('','$flight_number','$img_name   ','$total_passengers','$description','$airline_id')";
    query($sql);
            echo "Thành công";
}

$sql = "SELECT * FROM airlines";
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
    <h1>Nhập thông tin </h1>
    <form action="" method="POST" enctype="multipart/form-data">
        flight_number<input type="number" name="flight_number">
        <br>
        image<input type="file" name="image">
        <br>
        total_passengers<input type="number" name="total_passengers">
        <br>
        description<input type="text" name="description">
        <br>
        <select name="airline_id">
            <option disabled hidden selected>Chọn</option>
            <?php foreach ($results as $i) :?>
                <option value="<?=$i['airline_id'] ?>"><?= $i['airline_name']?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Gửi</button>
    </form>
</body>

</html>