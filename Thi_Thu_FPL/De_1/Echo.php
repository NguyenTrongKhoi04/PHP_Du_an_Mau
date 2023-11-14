<?php
include_once "Connection.php";
// $id = $_GET['id'];

$sql ="SELECT * FROM airlines";
$results = SelectAll($sql); 

if($_SERVER['REQUEST_METHOD']==='POST'){
    extract($_POST);
    extract($_FILES);

    $Select = $_POST['airline_name'];
    
    $img = $image['name'];
    move_uploaded_file($image['tmp_name'],"img/".$img);

    var_dump($img);
    $sql = "INSERT INTO flights VALUE ('','flight_number','$img','total_passenged','$description','$Select')";
    query($sql);

    $mes = "Thêm thành công";
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
    <h2>Thêm</h2>
    <div>
        <?=$mes ?? '';?>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        flight_number <input type="number" name="flight_number">
        <br>
        image <input type="file" name="image">
        <br>
        total_passenged <input type="number" name="total_passenged">
        <br> 
        description <textarea name="description" cols="30" rows="10"></textarea>
        <br> 
        <select name="airline_name">
            <option hidden selected disabled>Chọn</option>
            <?php foreach($results as $i) :?>
                <option value="<?= $i['airline_id'] ?>">
                    <?= $i['airline_name']?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Gửi</button>
    </form>
</body>

</html>