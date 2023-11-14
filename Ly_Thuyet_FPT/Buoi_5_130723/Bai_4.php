<?php
$arr = array(1,2,3,4,5,6,7,8,9,10);
$max = max($arr);
$sum = array_sum($arr);
$avg = $sum / count($arr);
echo "Số lớn nhất trong mảng là: ".$max."<br>";
echo "Trung bình cộng các số trong mảng là: ".$avg;
?>