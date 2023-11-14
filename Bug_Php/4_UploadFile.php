<!-- muốn tải file vào thư mục mik tạo thì làm thế nào -->
<!-- xem những file tải, được di chuyển lên trên server thì lm ntn -->
<!-- khi chayj thì sẽ tạo ra 1 folder "khoi" và tạo ra 1 file "1" -->
<?php
if (isset($_POST["upload"])&&(isset($_FILES["file"]))&&(!$_FILES["file"]["error"])) {
                            // file chính là name của thẻ input đầu tiên dòng 26
    // các bước kiểm tra theo điều kiện 
    // input "name = upload" có giá trị --> binary(mảng) "file" có giá trị --> trong file đó k có lỗi 
                                                                            // ko có lỗi sai --> trả về 0 --> trả về false
                                                                     // !false == True 
    print_r($_FILES);
    move_uploaded_file($_FILES["file"]["tmp_name"],mkdir("khoi"));
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
    </form>
</body>

</html>