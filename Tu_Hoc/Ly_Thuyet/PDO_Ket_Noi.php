<!-- pre là thẻ in có kể cả khi b enter -->
<!-- Query là thực hiện câu lệnh truy vấn cơ sở dữ liệu, $query dòng số 15 là kết quả của truy vấn (bản thân nó là 1 cái bảng) -->
<!-- fetch_assoc chỉ có trong sqli (trong PDO sẽ viết khác). Câu lệnh này có tác dụng là lấy dữ liệu từ kết quả truy vấn  -->
<!-- fetch_assoc là dữ liệu TỪNG DÒNG trong bảng -->
<!-- khi biến là các câu lệnh INSERT/DELETE/UPDATE thì biến sẽ là BOOLEAN =>> khi kieemr tra dùng if(%bien==TRUE/FALSE){...} -->
<?php
$host= "localhost";
$name= "root";
$database= "khoi";
$password = "";


// ////////// Kết nối bằng sqli /////////////////////
$connection= new mysqli($host,$name,$password,$database);

// if($connection->connect_error){
//     exit("lỗi rồi");
// }

// // $them = "INSERT into chaythu values(3,N'nkl',4,4)";
// // $chaythem= $connection->query($them);
// // var_dump($them);

// $run= "SELECT * from chaythu";
// echo"<br>";
// $query= $connection->query($run);
// while($row = $query->fetch_assoc()){
//     var_dump($row);

// }


// $row= mysqli_query($connection,$run);
// $kiemtra = mysqli_fetch_assoc($row);
// foreach($kiemtra as $i){
//     echo $i;
// }

// $row = $connection->query($run);
// $b=$row->fetch_assoc();
// var_dump($b);


////////// Kết nối bằng PDO /////////////////////
// try{
//     $connection = new PDO("mysql:host=$host;dbname=$database",$name,$password);
//     $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    //setAttribute là phương thức để thiết lập thuộc tính chó đối tượng, nó không đặc biệt thuộc về 1 lớp cụ thẻ 
                        // cú pháp $object->setAttribute($attribute, $value);
                                // $object: đối tượng
                                // $attribute: tến thuộc tính bạn muốn thiết lập
                                // $value: Giá trị muốn đặt cho thuộc tính đó
                        // cho phép bạn đặt các thuộc tính như chế độ báo lỗi,chế độ fetch (truy xuất dữ liệu),chế độ chuyển đổi dữ liệu,...
                    // PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION là "thuộc tính, giá trị" như tôi đã nói ở phần setAttribute ở trên

//     $run= "SELECT * from chaythu";
//     $query= $connection->prepare($run);// đây là câu lệnh chuẩn bị 
//     $query->execute();// giải phóng chuẩn bị đó
            // prepare và excute luôn đi kèm với nhau, thiếu 1 trong 2 thì sẽ sai về mặt logic còn code thì vẫn đúng

//     $result= $query->fetchAll(PDO::FETCH_ASSOC);// = mysqli_fetch_assoc();
                // fetchAll != fetch_assoc()
                    //  fetch_assoc() là từng dòng 1 trong bảng data còn fetchAll là tất cả dữ liệu của bảng đó
                    // Trả về: 
                            // PDO::FETCH_ASSOC lấy mảng liên kết
                            // PDO::FETCH_NUM Lấy mảng tuần tự
                            // fetchAll(): Trả về một mảng chứa tất cả các dòng kết quả. Mỗi dòng được biểu diễn bởi một mảng liên kết.
                            // fetch_assoc(): Trả về một mảng liên kết chứa dữ liệu của một dòng kết quả.

//     // foreach($result as $itema){
//     //     var_dump($itema);die();
//     // }
//     var_dump($result);
// }
// catch(Exception $e){
//     echo $e->getMessage();
// }
