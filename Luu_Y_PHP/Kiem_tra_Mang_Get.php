ví dụ
sử dụng khi method là get
http://localhost:81/Code_Php/thu.php/?test=1
http://localhost:81/Code_Php/thu.php/?test=1&test2=2
// sau dấu ? là biễn được thêm vào mảng $_GET
var_dump($_GET);// kiểm tra mảng GET
var_dump($_GET['test2']);// lấy phần tử trong mảng, vì $_GET là 1 mảng ko có tuần tự(k có số thứ tự vị trí)
                        // khi đó nếu dùng só thứ tự thì sẽ bị lỗi