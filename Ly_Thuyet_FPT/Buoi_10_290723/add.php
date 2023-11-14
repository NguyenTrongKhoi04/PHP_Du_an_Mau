<?php
include_once "connection.php";
include_once "Create.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $New_marjors_name=$_POST['New_marjors_name']??'';

    if(!($New_marjors_name=='')){
        $sql1= "INSERT INTO majors value ('','$New_marjors_name')";
        $stmt= $connection->prepare($sql1);
        $stmt->execute();
    }

    $FULLNAME=$_POST['FULLNAME'];
    $AVATAR=$_FILES['AVATAR'];  
        if($AVATAR['size']>0){
            $img=$AVATAR['name'];
            move_uploaded_file ($AVATAR["tmp_name"],"img/".$img);
            var_dump($AVATAR["tmp_name"]);
        }
        $img=$AVATAR['name'];
        move_uploaded_file ($AVATAR["tmp_name"],"img/".$img);

    $BIRTHDAY=$_POST['BIRTHDAY'];
    $EMAIL=$_POST['EMAIL'];
    $ADDRESS=$_POST['ADDRESS'];
    $HOBBIES=$_POST['HOBBIES'];
    $SKILL=$_POST['SKILL'];
    $SELECT=$_POST['SELECT'];    

    $sql2 = "INSERT INTO Profiles VALUE ('','$FULLNAME','$img','$BIRTHDAY','$EMAIL','$ADDRESS','$HOBBIES','$SKILL','$SELECT')";
    $stmt= $connection->prepare($sql2);
    $stmt->execute();
}
$sql0= "SELECT * FROM majors";
$stmt= $connection->prepare($sql0);
$stmt->execute();
$result= $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST">
        Nhập chuyên nghành mới <input type="text" name="New_marjors_name">
        <button type="submit">Gửi</button>
    </form>

    <h3>Nhập thông tin khách hàng</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        FULLNAME <input type="text" name="FULLNAME">
        <br>
        AVATAR <input type="file" name="AVATAR">
        <br>
        BIRTHDAY <input type="date" name="BIRTHDAY">
        <br>
        EMAIL <input type="text" name="EMAIL">
        <br>
        ADDRESS <input type="text" name="ADDRESS">
        <br>
        HOBBIES <input type="text" name="HOBBIES">
        <br>
        SKILL <input type="text" name="SKILL">
        <br>
        MARJORS <select name="SELECT">
            <option disabled selected hidden>Chọn</option>
            <?php foreach($result as $i) :?>
            <option value="<?=$i['ID']?>"><?=$i['ID'] ?> - <?= $i['MARJORS_NAME']?></option>
            <?php endforeach?>
        </select>
        <br>
        <button type="submit">Gửi</button>
    </form>
    <a href="list.php">Danh Sách</a>
</body>

</html>