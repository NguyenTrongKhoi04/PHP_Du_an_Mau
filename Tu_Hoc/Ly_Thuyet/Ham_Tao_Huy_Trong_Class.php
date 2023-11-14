<?php
class thu{
    public $name=7;
    public function __construct($name="")
    {
        $this->name= $name; 
        echo $this->name;
    }
    public function __destruct()
    {
        echo "đã xóa đối tượng này rồi";
    }
}

$khoi= new thu("khoi");

////////// VÍ DỤ THỰC TẾ //////////////////////
// class File {
//     private $filePath;

//     public function __construct($filePath) {
//         $this->filePath = $filePath;
//         $this->openFile();
//     }

//     public function __destruct() {
//         $this->closeFile();
//     }

//     private function openFile() {
//         echo "Mở file: " . $this->filePath . "<br>";
//         // Mở file và thực hiện các thao tác khác
//     }

//     private function closeFile() {
//         echo "Đóng file: " . $this->filePath . "<br>";
//         // Đóng file và giải phóng tài nguyên
//     }
// }

// // Tạo đối tượng và mở file
// $fileObj = new File("data.txt");

// // Khi kết thúc chương trình hoặc không cần sử dụng đối tượng nữa, đối tượng sẽ bị hủy
// // và file sẽ được đóng tự động

// //Trong ví dụ trên, khi bạn tạo một đối tượng File, hàm tạo __construct() được gọi 
// //và hiển thị thông báo "Mở file: data.txt". Hàm tạo này mở một tệp tin với đường 
// //dẫn đã được truyền vào và thực hiện các thao tác khác trên tệp tin. Khi đối tượng 
// //không còn tồn tại hoặc bị hủy, hàm hủy __destruct() được gọi và hiển thị thông 
// //báo "Đóng file: data.txt". Hàm hủy này đóng tệp tin và giải phóng tài nguyên.