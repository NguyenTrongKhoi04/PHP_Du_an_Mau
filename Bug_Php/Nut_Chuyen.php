<?php
// Khởi tạo phiên làm việc (session) nếu chưa tồn tại
session_start();

// Khai báo mảng sản phẩm
$mang = [
    [
        "ID" => 1,
        "NAME" => "Iphone14",
        "IMAGE" => "iphone.img",
    ],
    [
        "ID" => 2,
        "NAME" => "SAMSung",
        "IMAGE" => "samsung.img",
    ]
];

$a = isset($_GET['loc']) ? $_GET['loc'] : 0;
$clickedTwice = isset($_SESSION['clicked_twice']) ? $_SESSION['clicked_twice'] : 0;
// điều kiện dạng a==1||b==2||c==..... 
$giatrimang = [];
foreach($mang as $item){
    array_push($giatrimang,$item['ID']);   
}
var_dump($giatrimang);
$isValid = false;

foreach ($giatrimang as $value) {
    if ($a == $value) {
        $isValid = true;
        break;
    }
}
var_dump($isValid);
// hết điều kiện
if ($isValid) {
    $clickedTwice++;
    $_SESSION['clicked_twice'] = $clickedTwice;
    var_dump($_SESSION['clicked_twice']);
} else {
    $clickedTwice = 0;
    $_SESSION['clicked_twice'] = 0;
    var_dump($_SESSION['clicked_twice']);
}
if($_SESSION['clicked_twice']==70){
    $_SESSION['clicked_twice']=0;

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
    <form action="" method="GET">
        <button name="loc" value="1" type="submit">Loại1</button>
        <button name="loc" value="2" type="submit">Loại2</button>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'GET'): ?>

        <?php if (!($clickedTwice % 2==0)): ?>
        <?php for ($i = 0; $i < count($mang); $i++): ?>
        <?php if ($mang[$i]['ID'] == $a): ?>
        <div><?= $mang[$i]['NAME'] ?></div>
        <?php endif ?>

        <?php endfor ?>
        <?php else: ?>

        <?php foreach ($mang as $item): ?>
        <div><?= $item['NAME'] ?></div>
        <?php endforeach ?>
        <?php endif ?>
        <?php endif ?>
    </form>

</body>

</html>