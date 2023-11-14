<?php
// Kết nối đến cơ sở dữ liệu (ví dụ: MySQL) sử dụng PDO
$host = "localhost";
$dataname = "khoi";
$name = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host;dbname=$dataname", $name, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công.";

    // Tạo bảng trong cơ sở dữ liệu nếu chưa tồn tại
    $create_Table = "CREATE TABLE IF NOT EXISTS du_lieu_asm(
        mahh INT PRIMARY KEY AUTO_INCREMENT,
        tenhh VARCHAR(200) NOT NULL,
        gia INT NOT NULL,
        soluong INT DEFAULT '0',
        hinhanh VARCHAR(255) -- Thêm trường mới để lưu đường dẫn tới ảnh
    )";

    $connection->exec($create_Table);
    echo "Tạo bảng thành công.";

    // Xử lý tải ảnh lên và lưu đường dẫn vào cơ sở dữ liệu
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tenhh = $_POST["tenhh"];
        $gia = $_POST["gia"];
        $soluong = $_POST["soluong"];

        // Xử lý tải ảnh lên
        $target_dir = "images/"; // Thư mục lưu trữ ảnh
        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        var_dump('<h1>'.basename($_FILES["hinhanh"]["name"]).'</h1>');
        var_dump('<h1>'.pathinfo($target_file, PATHINFO_EXTENSION).'</h1>');


        // Kiểm tra xem tệp có phải là hình ảnh thật sự hay không
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["hinhanh"]["tmp_name"]);
            if ($check !== false) {
                echo "Tệp là hình ảnh - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "Tệp không phải là hình ảnh.";
                $uploadOk = 0;
            }
        }

        // Kiểm tra nếu tệp đã tồn tại
        if (file_exists($target_file)) {
            echo "Xin lỗi, tệp đã tồn tại.";
            $uploadOk = 0;
        }

        // Kiểm tra kích thước tệp
        if ($_FILES["hinhanh"]["size"] > 500000) {
            echo "Xin lỗi, kích thước tệp quá lớn.";
            $uploadOk = 0;
        }

        // Cho phép chỉ các định dạng hình ảnh cụ thể
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Xin lỗi, chỉ các định dạng JPG, JPEG, PNG và GIF được phép.";
            $uploadOk = 0;
        }

        // Kiểm tra nếu $uploadOk = 0, không tải ảnh lên
        if ($uploadOk == 0) {
            echo "Xin lỗi, tệp của bạn không được tải lên.";
        // Nếu mọi thứ đều ổn, thử tải lên tệp
        } else {
            if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                echo "Tệp " . htmlspecialchars(basename($_FILES["hinhanh"]["name"])) . " đã được tải lên thành công.";
                // Lưu đường dẫn tới ảnh vào cơ sở dữ liệu
                $hinhanh = $target_file;
                $sql_insert_data = "INSERT INTO du_lieu_asm (tenhh, gia, soluong, hinhanh) VALUES ('$tenhh', '$gia', '$soluong', '$hinhanh')";
                $connection->exec($sql_insert_data);
                echo "Thêm dữ liệu thành công.";
            } else {
                echo "Xảy ra lỗi khi tải lên tệp.";
            }
        }
    }
} catch (PDOException $e) {
    echo "Lỗi kết nối: " . $e->getMessage();
}
$sql_select_images = "SELECT hinhanh FROM du_lieu_asm";
$stmt = $connection->query($sql_select_images);

// Hiển thị mỗi ảnh trong mã HTML của bạn
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<img src='" . $row['hinhanh'] . "' alt='Ảnh sản phẩm'><br>";
}


// Đóng kết nối
$connection = null;
?>

<!DOCTYPE html>
<html>
<body>

<h2>Thêm hàng hóa</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
  Tên hàng hóa: <input type="text" name="tenhh"><br>
  Giá: <input type="text" name="gia"><br>
  Số lượng: <input type="text" name="soluong"><br>
  Hình ảnh: <input type="file" name="hinhanh" id="hinhanh"><br>
  <input type="submit">
  <button type="submit"></button>
</form>
