<?php
// $a=5;
// $c=$a;// $c=5
// $mang=['a','b','c'];

// // var_dump()
// // echo 
// // print_r()

// var_dump($mang);
// print_r($mang);


// lần dầu vào web -> dữ liệu thì gán cho nó bằng ' ';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$so1= isset($_POST['so1']) ? $_POST['so1'] : 0;
$so2= isset($_POST['so2']) ? $_POST['so2'] : 0;

echo $so1+$so2;
var_dump($so1);

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
    <form action="" method="POST">
    <input type="number" value="0" name="so1" hidden>
        <input type="number"  name="so1">
        <input type="text" name="so2">
        <button type="stubmi">Nộp</button>
    </form>
</body>
</html>