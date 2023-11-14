<?php

if($_SERVER['REQUEST_METHOD']==='POST'){
    extract($_POST);
    if($tk=='khoi' && $mk=='1'){

        setcookie('username',$tk,time()+10);
        var_dump($_COOKIE);
    }
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
    <form action="" method="POST">
        <input type="text" name="tk">
        <br>
        <input type="text" name="mk">
        <button type="submit">GỬi</button>
    </form>
</body>
</html>