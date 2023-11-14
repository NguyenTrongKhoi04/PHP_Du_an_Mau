<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("location:login.php");
    die;
}
include_once "connection.php";
$id = $_GET['id'];

$sql ="SELECT * FROM airlines";
$results = SelectAll($sql); 

$sql = "SELECT 
        f.flight_id,
        f.flight_number,
        f.image,
        f.total_passenged,
        f.description,
        f.airline_id as id_chuyen_bay,
        a.airline_id as id_hang_bay,
        a.airline_name
        FROM flights f 
        INNER JOIN airlines a ON (f.airline_id=a.airline_id)
        WHERE flight_id = '$id'
";
$results2 = SelectOne($sql);

if($_SERVER['REQUEST_METHOD']==='POST'){
    extract($_POST);
    extract($_FILES);

    $Select = $_POST['airline_name'] ??  $results2['id_chuyen_bay'];
    
  
    if($image['size']){
        $img = $image['name'];
        move_uploaded_file($image['tmp_name'],"img/".$img);
    }else{
        $img = $results2['image'];
    }
    
    $sql = "UPDATE flights SET 
        flight_number='$flight_number',
        image = '$img',
        total_passenged = '$total_passenged',
        description = '$description',
        airline_id = '$Select' 
        WHERE flight_id = '$id'
        ";
    query($sql);

    $mes = "Sửa thành công";
    header("location: index.php?mes=".$mes);
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
  
    <form action="" method="POST" enctype="multipart/form-data">
        flight_number <input type="number" name="flight_number" value="<?= $results2['flight_number']?>">
        <br>
        image <input type="file" name="image">
        <br>
        <img src="img/<?= $results2['image']?>" width="100px" alt="" >
        <br>
        total_passenged <input type="number" name="total_passenged"  value="<?= $results2['total_passenged']?>">
        <br> 
        description <textarea name="description" cols="30" rows="10"  value="<?= $results2['description']?>"></textarea>
        <br> 
        <select name="airline_name">
            <option hidden selected disabled><?= $results2['airline_name'] ?? 'Chọn' ?></option>
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