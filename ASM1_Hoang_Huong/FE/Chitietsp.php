<?php
session_start();
include_once "../../ASM1/BE/connection.php";

$id = $_GET['id'];
$mes = $_GET['mes'] ?? '';
echo $mes;
// var_dump($_SESSION['admin']['ID']);

//Kiểm tra session
if (!isset($_SESSION['admin'])) {
    header("location: ../../ASM1/BE/login_user.php");
    exit();
}
$sql = "SELECT * FROM products WHERE ID='$id'";
$result = SelectOne($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="chitiet.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="./img/Meubel House_Logos-05.png" alt="">
            Furniro
        </div>
        <div class="menu">
            <a href="Home.php">Home</a>
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
    <main>

                <div class="first">
                    <p>Home</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                        <path d="M0 12L5 7L0 2L1 0L8 7L1 14L0 12Z" fill="black" />
                    </svg>
                    <p>Shop</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                        <path d="M0 12L5 7L0 2L1 0L8 7L1 14L0 12Z" fill="black" />
                    </svg>
                    <p>Asgaard sofa</p>
                </div>
                <div class="second">
                    <div class="left">
                        <div class="img-left">
                            <div><img src="img/Maya sofa three seater (1) 1.png" alt=""></div>
                            <div> <img src="img/Outdoor sofa set 2.png" alt=""></div>
                            <div><img src="img/Outdoor sofa set_2 1.png" alt=""></div>
                            <div><img src="img/Stuart sofa 1.png" alt=""></div>
                        </div>
                        <div class="img-right">

                            <img src="img/<?= $result['ANH'] ?>" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <h1> <?= $result['TEN'] ?> </h1>

                        <p><?= $result['GIA'] ?></p>
                        <div class="star">
                            <img src="img/dashicons_star-filled.png" alt="">
                            <img src="img/dashicons_star-filled.png" alt="">
                            <img src="img/dashicons_star-filled.png" alt="">
                            <img src="img/dashicons_star-filled.png" alt="">
                            <img src="img/dashicons_star-filled.png" alt="">

                        </div>
                        <p><?= $result['THONGTIN'] ?>

                        </p>
                        <p>Size</p>
                        <div class="size">
                            <div class="sizeL">L</div>
                            <div class="sizeX">XL</div>
                            <div class="sizeX">XS</div>
                        </div>
                        <p>Color</p>
                        <div class="color">
                            <div class="blue"></div>
                            <div class="black"></div>
                            <div class="yellow"></div>
                        </div>
                        <div class="comment">
                            <div class="number">
                                <div>-</div>
                                <div>1</div>
                                <div>+</div>
                            </div>
                            <div class="add">
                                Add To Cart
                            </div>
                            <div class="compare">
                                +Compare
                            </div>
                            <div class="compare">
                                <a href="../../ASM1/BE/add_gio_hang.php?id=<?= $id?>">thêm vào giỏ hàng</a>
                            </div>
                        </div>
                        <div class="ngang">

                        </div>

                    </div>

                </div>
  
        <div class="third">
            <div>
                <p>SKU</p>
                <p>Category</p>
                <p>Tags</p>
                <p>Share</p>
            </div>
            <div>
                <p>: SS001</p>
                <p>: Sofas</p>
                <p>: Sofa, Chair, Home, Shop</p>
                <div class="iconn">:<img src="img/akar-icons_facebook-fill.png" alt="">
                    <img src="img/akar-icons_linkedin-box-fill.png" alt="">
                    <img src="img/ant-design_twitter-circle-filled.png" alt="">
                </div>
            </div>
        </div>
        <hr>
        <div class="description">
            <div class="text">
                <p class="main-text">Description</p>
                <p>Additional Information</p>
                <p>Reviews [5]</p>
            </div>
            <div class="content-text">
                <p>Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker takes the unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.</p>
                <p>Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.</p>

            </div>
            <div class="image">
                <img src="img/sofa.png" alt="">
                <img src="img/sofa.png" alt="">
            </div>
        </div>
        <hr>
        <div class="Related">
            <h2>Related Products</h2>
            <div class="product">
                <div class="item-product">
                    <div class="item">
                        <img src="img/image 1.png" alt="">
                        <div class="price">
                            <p>Syltherine</p>
                            <span>Stylish cafe chair</span>
                            <p>Rp 2.500.000 <del>Rp 3.500.000</del></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/image 3.png" alt="">
                        <div class="price">
                            <p>Veliasa</p>
                            <span>Stylish cafe chair</span>
                            <p>Rp 2.500.000 <del>Rp 3.500.000</del></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/image 7.png" alt="">
                        <div class="price">
                            <p>Lolito</p>
                            <span>Stylish cafe chair</span>
                            <p>Rp 2.500.000 <del>Rp 3.500.000</del></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/image 4.png" alt="">
                        <div class="price">
                            <p>Respira</p>
                            <span>Stylish cafe chair</span>
                            <p>Rp 2.500.000 <del>Rp 3.500.000</del></p>
                        </div>
                    </div>

                </div>
                <div class="btn"><button type="button">Show More</button></div>
            </div>
    </main>
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