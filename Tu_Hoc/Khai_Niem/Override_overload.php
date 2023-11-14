<?php
///////////////// OVERRIDE ////////////////////////
// // override: ghi đè lên lớp cha
// // ứng dụng trong thực tế =>> giả sử lớp cha là động vật có metthod chạy. 
//     // Lúc này ta có lớp con "ga" --> ghi đè method chạy: "chạy bằng 2 chân"
//     // tương tự với các con khác =>> ghi đè khi các đối tượng có thuộc tính phương thức khác nhau
// class a{
//     public $obj;
//     function hd1(){
//         echo "hành động 1 của class a";
//     }
//     function hd2(){
//         echo "HD 2 của class a";
//     }
// }
// class b extends a{
//     function hd1(){ 
//         echo "khoi";
//     }  //override (ghi đè) lên hàm cha
//         // nó sẽ không thay đổi giá trị của cha
//     }
// $a = new b;
// $a->hd1();

///////////////// OVERLOAD ////////////////////////
// Trong PHP ko hỗ trợ overload. Bạn cần biết khái niệm này vì 2 cái này rất dễ nhầm với nhau
// class a{
//     public $a;
//     public $b;
//     public $c;
//     function tinhDiem($a,$b,$c){
//         // tính điểm
//     }
//     function tinhDiem($a,$$b){
//         // tính điểm
//     }
// }