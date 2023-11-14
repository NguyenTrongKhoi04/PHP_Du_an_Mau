<?php
class animal {
    public $name; 
    function run(){
        echo 4;
        echo $this->name;
    }
};
 
$khoi = new animal(); 
$khoi->name=10;
echo $khoi->run();
// echo $khoi->name;