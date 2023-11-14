<?php
include_once "connection.php";
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $FULLNAME = $_POST['FULLNAME'];
    $AVATAR = $_FILES['AVATAR'];
    if ($AVATAR['size'] > 0) {
        $img = $AVATAR['name'];
        move_uploaded_file($AVATAR["tmp_name"], "img/" . $img);
    }else{
        $img=$_POST['AVATAR'];
    }
   
    $BIRTHDAY = $_POST['BIRTHDAY'];
    $EMAIL = $_POST['EMAIL'];
    $ADDRESS = $_POST['ADDRESS'];
    $HOBBIES = $_POST['HOBBIES'];
    $SKILL = $_POST['SKILL'];

    
    $sql = "SELECT * FROM profiles WHERE ID = $id";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $chon= $stmt->fetch(PDO::FETCH_ASSOC);

    // giữ lại giá trị của chọn nghành
    $SELECT = $_POST['SELECT']?? $chon['MAJORS_ID'];

    $sql2 = "UPDATE profiles set FULLNAME='$FULLNAME',AVATAR='$img',BIRTHDAY='$BIRTHDAY',EMAIL='$EMAIL'
            ,ADDRESS='$ADDRESS',HOBBIES='$HOBBIES',SKILL='$SKILL',MAJORS_ID='$SELECT' where ID = $id";
    $stmt = $connection->prepare($sql2);
    $stmt->execute();
}

$sql = "SELECT * FROM majors";
$stmt = $connection->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


$sql = "SELECT * FROM profiles WHERE ID=$id";
$stmt = $connection->prepare($sql);
$stmt->execute();
$products = $stmt->fetch(PDO::FETCH_ASSOC);


$sql = "SELECT p.ID AS ProfileID, 
p.FULLNAME, 
p.AVATAR,  
p.BIRTHDAY, 
p.EMAIL, 
p.ADDRESS, 
p.HOBBIES, 
p.SKILL, 
p.MAJORS_ID, 
m.ID AS MajorID, 
m.MARJORS_NAME 
FROM Profiles p
INNER JOIN Majors m ON (p.MAJORS_ID = m.ID) WHERE p.ID=$id";
$stmt = $connection->prepare($sql);
$stmt->execute();
$products_Loc = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Nhập thông tin khách hàng</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        FULLNAME <input type="text" name="FULLNAME" value="<?= $products['FULLNAME'] ?>">
        <br>
        AVATAR <input type="file" name="AVATAR" value="<?= $products['AVATAR'] ?>">
        <input type="hidden" name="AVATAR" value="<?= $products['AVATAR'] ?>">
        <br>
        BIRTHDAY <input type="date" name="BIRTHDAY" value="<?= $products['BIRTHDAY'] ?>">
        <br>
        EMAIL <input type="text" name="EMAIL" value="<?= $products['EMAIL'] ?>">
        <br>
        ADDRESS <input type="text" name="ADDRESS" value="<?= $products['ADDRESS'] ?>">
        <br>
        HOBBIES <input type="text" name="HOBBIES" value="<?= $products['HOBBIES'] ?>">
        <br>
        SKILL <input type="text" name="SKILL" value="<?= $products['SKILL'] ?>">
        <br>

        <div><?= $products_Loc['MARJORS_NAME'] ?></div>
        MARJORS <select name="SELECT"> 
            <option disabled selected hidden><?=$products_Loc['MARJORS_NAME']?? 'Chọn' ?></option>
            <?php foreach ($result as $i) : ?>
                <option value="<?= $i['ID'] ?>"><?= $i['ID'] ?> - <?= $i['MARJORS_NAME'] ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Gửi</button>
    </form>
    <a href="list.php">Danh Sách</a>
</body>

</html>