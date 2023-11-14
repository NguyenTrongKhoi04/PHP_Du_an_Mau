<?php
// $this -> hàm hoặc biến 
class cha{
    public $bien_Public;// ở đâu cũng dùng được 
    protected $bien_Protected;// chỉ có lớp con kế thừa cha mới dùng đc
    private $bien_Private;// chỉ có class chứa private mới dùng đc

    protected $result=[];// ở dây chỉ có thể là private hoặc protected

// giống như java, b sẽ có 2 phương thức với 1 biến đó là tạo(set) và lấy(get)
// biến $this là 1 từ khóa dùng để truy cập vào biến của class ở trong hàm phương thức 

    function getResult($result){
    // biến $result trong phương thức này khác hoàn toàn với $result được khia bóa ở class kia
        return $this->result=$result;// thêm $ vào result cũng ko sai
    }
    function setResult($result){
    // trong hàm này b muốn thêm gì vào biến $result kia đều đc 
        $this->result=$result;
    }
    function query(){
        $this->setResult([1,2,3]); 
        return $this->result;//$this có tác dụng rất rõ ở đây
                        // tại sao ko ghi là $result ?
                            // =>> nó sẽ ko biết $result của class là ai
                            // hàm này không phải đối tượng giống biến $a dưới kia
                            // vậy nên ta sử dụng $this để truy xuất vào biến $result của class
        }
}


$a= new cha;
echo $a->bien_Public;
var_dump($a->query());