<?php
// kế thừa là gì
    // đối tượng động vật 
        // thuộc tính: chân,tay,mắt,...
        // phương thức: chạy, nhảy,bơi,...
    // đối tượng con chó 
        // cũng có các thuộc tính trên, chả lẽ b viết lại những gì như ở trên
        // nếu viết vậy thì dài, mất time. Giả sử có 1000 con vật =>> cách lm này không khả thi
    // =>> đó chính là sụ ra đời của kế thùa "concho" sẽ kế thừa lớp "dongvat"
//từ khóa "extends" dùng để kế thừa 
class dongvat{
    public $chan=2;
    public $tay;

    function chay(){
        return "chay 4km";
    }
    function boi(){
        return "bơi bình thường";
    }
}
class concho extends dongvat{
    // bạn có thể sử dụng những j có ở class dongvat
    // nếu sửa thì ghi đè lên =>> đó ngta gọi là"Nạp Chồng"
    public $chan=4;

    function chay(){
        return parent::chay();
        // parent:: =>> sử dụng lại phương thức cha
        // "parrent::" chỉ được viết trong hàm (method của đối tượng)
    }

    function boi(){
        return "ko biết bơi";
    }
}

$dongvat=new dongvat;
echo $dongvat->chan;//2
$concho= new concho;
echo $concho->chan=7;//4 , gán chan=7 sẽ không thay đổi giá trị ở class

echo $concho->chay();
echo $concho->boi();
