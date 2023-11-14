<?php
session_start();
include_once "../../ASM1/BE/connection.php";

//Kiểm tra session
if (!isset($_SESSION['admin'])) {
    header("location: ../../ASM1/BE/login_user.php");
    exit();
}

$sql = "SELECT * FROM categories";
$result = SelectAll($sql);

$sql = "SELECT
        p.ID as ID_products,
        p.TEN,
        p.ANH,
        p.THONGTIN,
        p.MALOAI,
        p.GIA,
        C.ID as ID_categories,
        C.LOAI as TEN_LOAI 
        FROM Products p
        INNER JOIN Categories C ON (p.MALOAI = C.ID) ";
$result_in = SelectAll($sql);

// lọc
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $loai = $_POST['select'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div class="logo">
            <img src="./img/Meubel House_Logos-05.png" alt="">
            Furniro
        </div>
        <div class="menu">
            <a href="">Home</a>
            <a href="hh.php">Shop</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        <div class="icon">
            <img src="img/mdi_account-alert-outline.png" alt="">
            <img src="img/akar-icons_search.png" alt="">
            <img src="img/akar-icons_heart.png" alt="">
            <img src="img/ant-design_shopping-cart-outlined.png" alt="">
        </div>
    </header>
    <div class="banner">
        <img src="img/scandinavian-interior-mockup-wall-decal-background 1.png" alt="">
        <div class="title-banner">
            <div class="title">
                <p>New Arrival</p>
                <h1>Discover Our New Collection</h1>
                <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                    ullamcorper
                    mattis.</p>
                <button type="button">BUY NOW</button>
            </div>
        </div>
    </div>
    <main>
        <div class="title-main">
            <h2>Browse The Range</h2>
            <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
        </div>
        <div class="intro">
            <div><img src="img/image 106.png" alt="">Dining</div>
            <div><img src="img/image 100.png" alt="">Living</div>
            <div><img src="img/image 101.png" alt="">Bedroom</div>
        </div>
    </main>

    <form action="" method="post">
        <select name="select" id="">
            <option hidden disabled selected>Chọn Danh Mục Hàng</option>
            <?php foreach ($result as $i) : ?>
                <option value="<?= $i['ID']?>"><?= $i['LOAI']?></option>
            <?php endforeach ?>
        </select>
        <button type="submit">Lọc</button>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
            <div class="producst" style="justify-content: space-around; display: grid;  grid-template-columns: 20% 20% 20% 20%;">
                <?php foreach ($result_in as $i) : ?>
                    <?php if ($i['MALOAI'] == $loai) : ?>

                        <div class="item-i">
                            <a href="Chitietsp.php?id=<?= $i['ID_products'] ?>">
                                <div class="name-sp"> <?= $i['TEN'] ?> </div> <br>

                                <div class="img">

                                    <img src="img/<?= $i['ANH'] ?>" width="80px">
                                </div>
                                <br>
                                <div class="money"> <?= $i['GIA'] ?> </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endif ?>
            </div>
            <footer>
                <div class="logo1">
                    <p class="logo2">Furniro</p>
                    <p class="ttt">400 University Drive Suite 200 Coral Gables,
                        FL 33134 USA</p>
                    <div class="internet">
                        <img src="img/akar-icons_facebook-fill.png" alt="">
                        <img src="img/ant-design_twitter-circle-filled.png" alt="">
                        <img src="img/akar-icons_linkedin-box-fill.png" alt="">
                    </div>
                </div>
                <div class="link">
                    <p class="link1">Link</p>
                    <p>Home</p>
                    <p>Shop</p>
                    <p>About</p>
                    <p>Contact</p>
                </div>
                <div class="link">
                    <p class="link1">Help</p>
                    <p>Payment Options</p>
                    <p>Returns</p>
                    <p>Privacy Policies</p>
                </div>
                <div class="nl">
                    <p class="link1">Newsletter</p>
                    <input type="text" placeholder="Enter Your Email Address" class="search">
                    <input type="button" value="SUBSCRIBE" class="tim">
                </div>



            </footer>
            <hr>
            <p class="last">2023 furino. All rights reverved</p>
            <h1><a href="../../ASM1/BE/logout.php">Đăng xuất</a> <a href="../../ASM1/BE/gio_hang.php">Giỏ hàng</a></h1>
            
</body>

</html>