<?php
 setcookie("username","admin",time()+60*60);//time tính bằng giây, trong trường hợp này là tồn tại 1 giờ 
 var_dump($_COOKIE);


 // Đặt múi giờ địa phương (UTC+7 - giờ Việt Nam)
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Chuyển đổi thời gian hết hạn của cookie sang múi giờ địa phương
$expiration_time_utc = '2023-08-03T02:03:10.065Z';
$expiration_timestamp = strtotime($expiration_time_utc); // Chuyển đổi thành timestamp
$expiration_local_time = date("Y-m-d H:i:s", $expiration_timestamp); // Chuyển đổi sang múi giờ địa phương
echo $expiration_local_time;

?>
<a href="get_cookie.php">Xem cookie</a>

