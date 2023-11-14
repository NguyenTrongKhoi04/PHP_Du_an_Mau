<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get.php" method="get">
        họ tên
        <input type="text" name="hoten" required>
        <br>
        đại chỉ
        <input type="text" name="diachi" required>
        <br>
        SĐT
        <input type="tel" name="sdt" maxlength="10" pattern="0(\d){9}" required>
        <br>
        Email
        <input type="email" name="email" required>
        <br>
        password
        <!-- <input type="password"  placeholder="<PASSWORD>" required=""> -->
            <input type="password" name="pass" required>
        <br>
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>