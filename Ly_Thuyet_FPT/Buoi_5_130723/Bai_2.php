<?php
$arr = ['11','12','13','14','15','16','17','18','19','20'];
$sum=0;
foreach($arr as $i){
    if(($i>10) && ($i%3==0)){
        $sum+=$i;
    }
}
echo "$sum";
