<?php
// ngoài này ra còn có các kh
if($_SERVER['REQUEST_METHOD'] === 'POST'){
echo "khoi";
    # $_SERVER['REQUEST_METHOD'] ==> có tác dụng như sau
        # khai báo phương thức lây dữ liệu từ client lên server
        # nếu không khớp với phương thúc lấy dữ liệu của các biến ở dưới thì sẽ ko gửi lên máy chủ => suubmit sẽ ra k ra gì
    # $_SERVER['REQUEST_METHOD']== 'GET' nếu đổi POST thành GET, theo mặt câu lệnh if thì điều kiện sai sẽ ko thực hiện hành động (station trong ngoặc),
    # nhưng khi run thì các hành động đó vẫn chạy và chuiwng trình báo lôi, b cho thêm lệnh echo vào khối hành động sẽ rõ nhất,
    # điều kiện sai nhưng vẫn chạy, giải thích như sau
        # chúng ta có 3 thứ cần nhắc đến: trình duyệt, request, server 
        # cách thức hoạt động như sau: Khi bạn truy cập vào 1 trang web, trình duyệt sẽ gửi request lên máy chủ và máy chủ trả về bằng kiểu html
        # lần đầu tiên khi b truy cập từ trình duyệt vào web thì  $_SERVER['REQUEST_METHOD'] mặc định sẽ là GET 
        # ==> chính vì vậy nên vô tình làm cho điều kiện $_SERVER['REQUEST_METHOD']== 'GET' đúng và thực hiện hành động của if
        # từ lần thứ 2, vì khác nhau về phương thức lấy dữ liệu (biến(POST) != server(GET)) nên form b sẽ rỗng vì dữ liệu ko lên đc máy chủ==> máy chủ ko trả về dữ liệu cho form của b
    
    # Nếu bỏ if($_SERVER['REQUEST_METHOD']== 'POST') đi thì sẽ bị lỗi vì 2 biến $number1, $nnumber2 không chứa j cả trong lần đầu chạy
        # kể cả khi b có dùng isset như tôi comment ở dưới thì vẫn bị vì khi ko có dữ liệu ==> theo lệnh isset thì 2 biến đó sẽ là '', tức là rỗng
            # khi như vậy thì ko thể tính tổng đc 
    $number1 = $_POST['number1'];
    $number2= $_POST['number2'];
    // $sum=$number1+$number2;
    // echo"khoi";
    function validate($data=[]){
        extract($data);
        $arr=[$number1,$number2];
        function isValueOne($value) {
            return $value === '';
        }
        $filteredArray = array_filter($arr, 'isValueOne');
        
        if(count($filteredArray)<0){
            
             return false;
         }else{
             return true;
         }
        

    }

    // $number1 = isset($_POST['number1']) ? $_POST['number1'] : '';
    // $number2 = isset($_POST['number2']) ? $_POST['number2'] : '';
    
    echo "tổng của $number1 và $number2 là: ".$sum ;
    #sẽ bị lỗi ở lần đầu chạy nếu không dùng isset;
    #fix bằng cách sử dụng isset để kiểm tra sự tồn tại cảu 1 biến 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./form.php" method="post">
        số thứ 1

        <input type="number" require name="number1" value="<?= isset($number1) ? $number1 : '' ?>">
        <!-- giữ số lại sau khi nhập -->
        <br>

        số thứ 2
        <input type="number" name="number2" value="<?= $number2 ?? '' ?>">
        <br> 
        <button type="submit">Tính</button>
    </form>

    <?php if (isset($sum)) : ?>
        <div style="color: red;font-size: 25px;">
            <?= "Tổng: $sum" ?> 
        </div>
    <!-- fixx lỗi lần đầu chạy bị lỗi  -->
    <?php endif ?>
</body>
</html>