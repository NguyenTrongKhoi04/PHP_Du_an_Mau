<?php
class so{
    public $DiemMonToan=0;
}

$khoi = new so();
$khoi->DiemMonToan=4;
echo $khoi->DiemMonToan;

$tu = new so();
echo $tu->DiemMonToan=9;
// lúc này biến $DiemMonToan của 2 dối tượng khoi, tu là 2 địa chỉ vùng nhớ hoàn toàn khác nhau

// Bạn muốn DiemMonToan của "tu" va "khoi" cùng 1 địa chỉ (obj tác động sau cùng sẽ ảnh hưởng đến gốc nó) 
// Để khác phục cái này, chúng ta có "static" 

class so2{
    public static $DiemMonVan=0;
    public static function tinh(){
        echo "giỏi";
    }

    function Lam_Gi_Do(){
        $a= self::$DiemMonVan; // self = this, this ko gọi được static biến (hoặc method) của class 
                              // =>> use self để gọi 
    }
}
// biến $DiemMonVan được khỏi tạo khi chương trình chạy 
    // =>> không cần phải tạo đối tượng để gọi thuộc tính đó ra 
    // ta cso thể gọi nó ra luông (như 1 biến toàn cục nhưng vẫn chạy trong phạm vi của class)
echo so2::$DiemMonVan;
echo so2::tinh();

