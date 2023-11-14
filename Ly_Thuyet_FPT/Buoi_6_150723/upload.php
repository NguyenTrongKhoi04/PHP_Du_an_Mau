<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $file=$_FILES['tailen'];
    if($file['size']==0){
        $error=' bạn chưa nhập file';
    }else{
        // khai báo mảng chứa đuôi mở rộng của ảnh 
        $imgs=['jpg','jpeg','png'];
        // lấy phần mở rộng của file
        $ext= pathinfo($file['name'],PATHINFO_EXTENSION);
            
        // nếu file không phải ảnh
        if(in_array($ext,$imgs))//xem ext có trong imgs không
        {
            $error= 'file không phải là ảnh';
        }
    }
    move_uploaded_file($file['tmp_name'],'upload/'.$file['name']); //=>> upload ảnh vào trong folder 
    if(!isset($error)){
        move_uploaded_file($file['tmp_name'],'upload/'.$file['name']);
        $mess = 'upload thành công';
        echo"thành công";
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="tailen">
        <span style="color: red;"><?= $error ?? '' ?></span>
        <div><?= $massage ?? ''?></div>
        <button type="submit">Nộp</button>
    </form>    
</body>
</html>