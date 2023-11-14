<?php
if($_SERVER['REQUEST_METHOD']== 'GET'){
    # cách hoạt động của dòng này là như thế nào
    #  vì sao khi đổi thành GET ==> điều kiện sai nhưng vẫn thực hiện station trong if
    
    # khi viết php mà cho vào trong file có php ==> đây đanglà ở máy client chứ ko phỉair server
    # nếu ko có 'REQUEST_METHOD']== 'POST' thì các biến kia sẽ bị lỗi vì ch được khai báo ở máy chủ
    
    $number1 = $_POST['number1'];
    $number2= $_POST['number2'];
    echo"khoi";
    // $number1 = isset($_POST['number1']) ? $_POST['number1'] : '';
    // $number2 = isset($_POST['number2']) ? $_POST['number2'] : '';
    
    #sẽ bị lỗi ở lần đầu chạy
    #fix bằng cách sử dụng isset để kiểm tra sự tồn tại cảu 1 biến 
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
        số thứ 1

        <input type="number" name="number1" value="<?= isset($number1) ? $number1 : '' ?>">
        <!-- giữ số lại sau khi nhập -->
        <br>

        số thứ 2
        <input type="number" name="number2" value="<?= $number2 ?? '' ?>">
        <br> 
        <button type="submit">Tính</button>
    </form>

    <?php if (isset($sum)) : ?>
        <div style="color: red;font-size: 25px;">
            <?= "Tổng: $sum" ?> 
        </div>
    <!-- fixx lỗi lần đầu chạy bị lỗi  -->
    <?php endif ?>
</body>
</html>