<?php
// lam viec voi thoi gian 
// thiet lap time zone

// Tạo thời gian =>> date(    "date"    ,    "timezone_type"    ,    "timezone"    )
            //            năm-tháng-ngày      1-USA / 3-UTC       Asia/Ho_Chi_Minh
// Tính thời gian =>> date_diff thực hiện phép trừ đặt trong dấu giá trị tuyệt đối
            //        
 
//y =>> năm có 2 số, Y là năm 4 số
// phần tử date, timezone, phần tử timezone
// %y lấy ra năm, %a (all) lấy ngày

// date_default_timezone_set("Asia/Ho_Chi_Minh");
// // ham lay thoi gian hien tai theo so nguyen 
// $now = time();
// echo"<p> Thoi gian theo so nguyen: $now </p>";
// // dinh dang thoi gian tu so nguyen
// $date1 = date("y-m-d H:i:s", time());
// echo"<p> bay gio la : $date1</p>";

//ham tao ngay thang nam 
$date2 = date_create();
$date3 = date_create('2004-06-13');

echo"<pre>";
var_dump($date2, $date3);
echo"</pre>";

//ham tinh thoi gian con lai 
$age = date_diff($date2, $date3);
echo"<h3> Tuoi cua ban la : " . $age->format("%y") . "</h3>";

echo get_class($age);


