<?php
    require_once "data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hh.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="Meubel House_Logos-05.png" alt="">
            Furniro
        </div>
        <div class="menu">
            <a href="Home.php">Home</a>
            <a href="#">Shop</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        <div class="icon">
            <img src="mdi_account-alert-outline.png" alt="">
            <img src="akar-icons_search.png" alt="">
            <img src="akar-icons_heart.png" alt="">
            <img src="ant-design_shopping-cart-outlined.png" alt="">
        </div>
    </header>
    <div class="banner">
        <img src="Rectangle 1.jpg" alt="">
    </div>
   
            
   
    <div class="list">
        <div class="all-list">
            <div class="filter">
                <img src="system-uicons_filtering.png" alt="">
                <span>Filter</span>
            </div>
            <div class="big-round">
                <img src="ci_grid-big-round.png" alt="">
                <img src="bi_view-list.png" alt="">
            </div>
            <div class="line"></div>
            <div class="showing">
                <p>Showing 1–16 of 32 results</p>
            </div>
        </div>
        <div class="ss">
            <div class="show">
                <span>Show</span>
                <input type="text" placeholder="16">
            </div>
            <div class="short-by">
                <span>Short by</span>
                <input type="text" placeholder="Default">
            </div>
        </div>
    </div>
    
    <div class="sp" style="    justify-content: space-around;
    display: grid;
    grid-template-columns: 20% 20% 20%;
    background-image: url(bgr.png);
    background-size: 100%;">
    <?php foreach ($products as $product) : ?>
        <a href="Chitietsp.php?mahh=<?= $product['mahh']?>" style="text-decoration: none;">
    <div class="buy">
        <div class="product">
            <div class="sale">
                <p>-30%</p>
            </div>
            <img src="<?= $product['hinh']?>" alt="" >
            <p class="syl"><?= $product['tenhh']?></p>
            <p class="syl2">Stylish cafe chair</p>
            <p class="price"><?= $product['gia']?> <span> Rp 3.500.000</span></p>
        </div>
    </div>
    <?php endforeach ?>

    </div>


    <footer>
        <div class="logo1">
            <p class="logo2">Furniro</p>
            <p class="ttt">400 University Drive Suite 200 Coral Gables,
                FL 33134 USA</p>
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
</body>

</html>