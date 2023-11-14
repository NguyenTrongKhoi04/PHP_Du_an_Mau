<?php
$say = function($name){
    echo "Hello, $name";
};
$say("World");
function myCaller($myCallback){
    echo $myCallback();
}

myCaller(function(){ echo "Hello";});
$a = array(1,2,3,4,5);
$b= array_map(function($n){
    return $n*3;
},$a);
print_r($b);