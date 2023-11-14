<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mssv = isset($_POST['mssv']) ? $_POST['mssv']:'';
    $name = $_POST['name'];
    $born = $_POST['born'];
    $points = $_POST['points'];
    $number1 = isset($_POST['number1']) ? $_POST['number1'] : '';
    echo "MSSV là: $mssv<br>";
    echo"Tên là: $name<br>";
    echo"ngày sinh $born <br>";
    echo "Điểm: $points <br>";
    if($points>=5){
        echo "qua môn";
    }else echo "trượt";

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
    <form action="" method="post">
        Nhập MSSV <input type="text" name="mssv" value="<?= isset($mssv) ? $mssv : '' ?>"><br>
        Nhập tên <input type="text" name="name" value="<?= $name ?? ''?>" required><br>
        Nhập ngày sinh <input type="date" value="<? $born ?? ''?>" name="born"><br>
        Nhập điểm <input type="number" value="<? $points ?? ''?>" name="points" min=0 max=10><br>
        <button type="submit">nộp</button>
    </form>
   
</body>

</html>