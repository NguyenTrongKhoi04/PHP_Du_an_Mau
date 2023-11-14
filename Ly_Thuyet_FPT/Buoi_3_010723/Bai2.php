<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post2.php" method="POST">
        họ tên
        <input type="text" name="hoten" required>
        <br>
        Ngày sinh
        <input type="date" name="date" required>
        <br>
        
        <input type="number" name="diem" required max="10"
        min="0">
        <br>
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>