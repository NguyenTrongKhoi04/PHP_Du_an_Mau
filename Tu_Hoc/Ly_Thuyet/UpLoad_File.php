<?php
if (isset($_POST["upload"])&&(isset($_FILES["file"]))&&(!$_FILES["file"]["error"])) {
                            // file chính là name của thẻ input đầu tiên dòng 26
    // các bước kiểm tra theo điều kiện 
    // input "name = upload" có giá trị --> binary(mảng) "file" có giá trị --> trong file đó k có lỗi 
                                                                            // ko có lỗi sai --> trả về 0 --> trả về false
                                                                            // !false == True 
    print_r($_FILES);
    mkdir("../khoi");
    move_uploaded_file($_FILES["file"]["tmp_name"],'../khoi/');
                //  ko biết áp dụng mkdir để tạo file mới
    echo "thành công";
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
        <input type="file" name="file">
        <input type="submit" name="upload" value="upload">
        <!-- thày bằng nút button để nộp cũng đc -->
        <!-- <button type="submit">nộp</button>, xóa điều kiện của thẻ input thứ 2 đi -->
    </form>
</body>

</html>