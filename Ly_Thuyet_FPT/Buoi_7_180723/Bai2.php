<!DOCTYPE html>
<html>
<head>
    <title>Form nhập thông tin sản phẩm</title>
</head>
<body>
    <h2>Form nhập thông tin sản phẩm</h2>
    <form method="POST" action="">
        <h3>Sản phẩm 1</h3>
        <label for="ten_sp1">Tên sản phẩm:</label>
        <input type="text" name="ten_sp1" id="ten_sp1" required><br>

        <label for="gia_sp1">Giá:</label>
        <input type="number" name="gia_sp1" id="gia_sp1" min="0" step="0.01" required><br>

        <h3>Sản phẩm 2</h3>
        <label for="ten_sp2">Tên sản phẩm:</label>
        <input type="text" name="ten_sp2" id="ten_sp2" required><br>

        <label for="gia_sp2">Giá:</label>
        <input type="number" name="gia_sp2" id="gia_sp2" min="0" step="0.01" required><br>

        <h3>Sản phẩm 3</h3>
        <label for="ten_sp3">Tên sản phẩm:</label>
        <input type="text" name="ten_sp3" id="ten_sp3" required><br>

        <label for="gia_sp3">Giá:</label>
        <input type="number" name="gia_sp3" id="gia_sp3" min="0" step="0.01" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $tenSP1 = $_POST['ten_sp1'];
        $giaSP1 = $_POST['gia_sp1'];

        $tenSP2 = $_POST['ten_sp2'];
        $giaSP2 = $_POST['gia_sp2'];

        $tenSP3 = $_POST['ten_sp3'];
        $giaSP3 = $_POST['gia_sp3'];

        echo "<h2>Thông tin 3 sản phẩm:</h2>";
        echo "Sản phẩm 1:<br>";
        echo "Tên sản phẩm: " . $tenSP1 . "<br>";
        echo "Giá: " . $giaSP1 . "<br><br>";

        echo "Sản phẩm 2:<br>";
        echo "Tên sản phẩm: " . $tenSP2 . "<br>";
        echo "Giá: " . $giaSP2 . "<br><br>";

        echo "Sản phẩm 3:<br>";
        echo "Tên sản phẩm: " . $tenSP3 . "<br>";
        echo "Giá: " . $giaSP3 . "<br><br>";

        $giaMax = max($giaSP1, $giaSP2, $giaSP3);
        echo "Sản phẩm có giá cao nhất:<br>";
        if ($giaMax == $giaSP1) {
            echo "Tên sản phẩm: " . $tenSP1 . "<br>";
            echo "Giá: " . $giaSP1 . "<br>";
        } elseif ($giaMax == $giaSP2) {
            echo "Tên sản phẩm: " . $tenSP2 . "<br>";
            echo "Giá: " . $giaSP2 . "<br>";
        } else {
            echo "Tên sản phẩm: " . $tenSP3 . "<br>";
            echo "Giá: " . $giaSP3 . "<br>";
        }
    }
    ?>
</body>
</html>