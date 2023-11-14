<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $thunhap = $_POST['thunhap'];
    $thunhap = isset($_POST['thunhap']) ? $_POST['thunhap'] : '';
    $tien = $thunhap;

        
        if($thunhap >= 20000000 && $thunhap <= 30000000){
            echo "Thuế bạn phải đóng (10%) là ".($tien*10/100);
        }else if($thunhap > 30000000 && $thunhap < 40000000){
            echo "Thuế bạn phải đóng (12,5%)là ".($tien*12.5/100);
        }else if($thunhap > 40000000 && $thunhap < 50000000){
            echo "Thuế bạn phải đóng (15%)là:".($tien*15/100);
        }else{
            echo "Thuế bạn phải đóng  là ".($tien*20/100);
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
    <form action="" method="post">
        Nhập thu nhập cá nhấn
        <input type="number" name="thunhap" min="0" placeholder="nhập tiền" value="<?= isset($thunhap) ? $thunhap : '' ?>">
        <button type="submit">Gửi</button>
    </form>
</body>
</html>