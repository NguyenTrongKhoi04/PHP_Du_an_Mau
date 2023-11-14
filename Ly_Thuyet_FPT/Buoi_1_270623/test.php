<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
   echo "khoi";

}
//    $arr =[
//         [
//             'e'=>'ok',
//         ],
//         7=>[
//             'b'=>'d',
//         ],
//         3=>[
//             'b'=>'de',
//         ]
//         ];

//     $arr2=  ['khoi',3,5,7];
//     echo $arr[1]['b'];

//     echo "<pre>";
//    print_r($arr);
//    echo "</pre>";
?>

<!-- 
    Get, Post
    name form
 -->

 <!-- a => 1

 key value -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        họ tên
        <input type="text" name="thu">
        <br>
        <button type="submit">nộp</button>
    </form>
</body>
</html>