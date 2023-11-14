<?php
//Khai báo hàm
/**
 * function tenHam(thamso){
 * code
 * }
 */
//Hàm không có giá trị trả về
function show(){
    echo"<h2>Lập trình PHP cơ bản </h2>";
}
//Hàm tính tổng
function sum($a, $b){
    $tong = $a + $b;
    echo"<h2>Tổng của $a + $b = $tong </h2>";
}
//Lời gọi hàm
show();
sum(10,90);

// hàm có giá trị tham số ban đầu
function sum2($a=10,$b=100){
    $tong=$a+$b;
    echo $tong;
}
sum2();

// hàm có giá trị
function sum3($a,$b){
    echo 2;
    return $a+$b;
}
sum3(1,2);//2
echo Sum3(14,5);//19

//không biết trc tham số
function laythamso() {
    $a= func_get_args();//function get argument(đối số)
    var_dump($a);    
}
laythamso("abc", "xyz",3,4); 

// sử dụng spreed
// function laythamso2($b,$c...$a){} ==>kể từ tham số thứ 3 mới lấy $a
function laythamso2(...$a){
    echo "<br>";
    var_dump($a);
}
laythamso2('apple', 'banana','orange');

// function callback
// khi xây dựng web có nhiều chức năng, không biết dùng hàm nào 
// =>> use callback để nó gọi lại 
function hi(){
    echo"Hello";
}
function goilai($a){
    // $a = 1 function, tức là gọi hàm bên trong 1 hàm
    $a();
}
goilai('hi');