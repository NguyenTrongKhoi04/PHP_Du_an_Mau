
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post1.php" method="POST">
        họ tên
        <input type="text" name="hoten" required>
        <br>
        SĐT
        <input type="tel" name="sdt" maxlength="10" pattern="/^0(\d){9}$/" required>
        <br>
        Email
        <input type="email" name="email" required>
        <br>
        đại chỉ
        <input type="text" name="diachi" required>
        <br>
        <select name="mon" id="">
            <option value="0">Môn</option>
            <option value="1">Văn</option>
            <option value="2">Anh</option>
            <option value="3">Lý</option>
        </select>
        <br>
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>