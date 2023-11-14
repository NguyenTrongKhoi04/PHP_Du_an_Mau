<?php
$fruits = array ('a','b','c','d');
foreach ($fruits as $i){
    echo "$i<br>";
}

$employee = array('name'=> 'Jhon Smith', 'age'=> 30,'profession');
foreach($employee as $a=>$b){
    echo sprintf("%s: %s</br>",$a,$b);
    echo "<br>";
}