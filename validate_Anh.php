<?php
// $filename = 'img.png';
// $path_parts = pathinfo($filename);
// $image_name = $path_parts['filename']; // Lấy phần tên tệp (không có phần mở rộng)

// echo $image_name; // Kết quả: 'img'

if($_SERVER['REQUEST_METHOD']==='POST'){
    $anh=$_FILES['img'];
    $email=$_POST['email'];

    if(!preg_match( '/^\\S+@\\S+\\.\\S+$/',$email)){
        echo "Bạn đã nhập sai email";  
    }

    // var_dump($anh['name']);
    $duoianh= pathinfo($anh['name'], PATHINFO_EXTENSION);
    // var_dump($duoianh);
    if( ($duoianh != 'png') && ($duoianh != 'jpg')){
        echo "chọn nhầm file";
    }else{
        echo "nộp thành công";
    }
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
        <input type="file" name="img">
        <br>
        <input type="text" name="email">
        <br>
        <button type="submit">Nộp</button>
    </form>
</body>
</html>

