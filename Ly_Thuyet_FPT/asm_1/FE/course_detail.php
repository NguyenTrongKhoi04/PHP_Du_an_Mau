<?php
session_start();
include_once "../../asm_1/BE/connection.php";

$a=$_GET['id'];
$mes=$_GET['mes'] ?? '';
echo $mes;
// var_dump($_SESSION['admin']['ID']);

//Kiểm tra session
if (!isset($_SESSION['admin'])) {
    header("location: ../../asm_1/BE/login_user.php");
    exit();
}
$sql = "SELECT * FROM products";
$results = SelectAll($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_Course detail.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
    <div class="header" style="margin-bottom: 20px;">
            <div class="contentheader">
                <div class="logo0">
                    <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="79" height="79" viewBox="0 0 79 79" fill="none">
                            <path d="M35.9645 2.94975C37.9171 0.997129 41.0829 0.997127 43.0355 2.94975L76.0502 35.9645C78.0029 37.9171 78.0029 41.0829 76.0503 43.0355L43.0355 76.0502C41.0829 78.0029 37.9171 78.0029 35.9645 76.0503L2.94975 43.0355C0.997129 41.0829 0.997127 37.9171 2.94975 35.9645L35.9645 2.94975Z" stroke="#00FFF0" stroke-width="2" />
                        </svg>
                        <p>TOTC</p>
                    </div>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Course</a></li>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">About Us</a></li>
                    </ul>
                    <div class="nutmenu">
                        <button>
                            <p><a href="../../asm_1/BE/gio_hang.php" style="text-decoration: none;color: black;">Giỏ hàng</a></p>
                        </button>
                        <button>
                            <p><a href="../../asm_1/BE/logout.php" style="text-decoration: none;color: black;">Đăng xuất</a></p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner">
            <img src="img_Course detail/Rectangle 77.png" alt="">
        </div>
        <div class="content">
            <div class="listcontent">
                <div>
                    <p>Overview</p>
                </div>
                <div>
                    <p>Overview</p>
                </div>
                <div>
                    <p>Overview</p>
                </div>
                <div>
                    <p>Overview</p>
                </div>
            </div>

            <!--  -->
            <div class="rectangle98">
                <div class="khoi1">
                    <div class="rectangle99">
                        <p class="p1">4 out of 5</p>
                        <img src="img_Course detail/Vector.png" alt="">
                        <div>
                            <p class="p2">Top Raiting</p>
                        </div>
                    </div>

                    <div class="listitem">
                        <div class="thetruot">
                            <p>5 Stars</p>
                            <div class="thanhtruot">
                                <div class="truotcha"></div>
                                <div class="truotcon"></div>
                            </div>
                        </div>
                        <div class="thetruot">
                            <p>4 Stars</p>
                            <div class="thanhtruot">
                                <div class="truotcha"></div>
                                <div class="truotcon"></div>
                            </div>
                        </div>
                        <div class="thetruot">
                            <p>3 Stars</p>
                            <div class="thanhtruot">
                                <div class="truotcha"></div>
                                <div class="truotcon"></div>
                            </div>
                        </div>
                        <div class="thetruot">
                            <p>2 Stars</p>
                            <div class="thanhtruot">
                                <div class="truotcha"></div>
                                <div class="truotcon"></div>
                            </div>
                        </div>
                        <div class="thetruot">
                            <p>1 Stars</p>
                            <div class="thanhtruot">
                                <div class="truotcha"></div>
                                <div class="truotcon"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="khoi2">
                    <div class="noidung1">
                        <div class="phan1">
                            <img src="img_Course detail/image 12.png" alt="">
                            <div class="thongtin">
                                <p>Lina</p>
                                <img src="img_Course detail/Vector.png" alt="">
                            </div>
                            <div class="chuthich">
                                <img src="img_Course detail/clock.png" alt="">
                                <p>3 Month</p>
                            </div>
                        </div>
                        <p>Class, launched less than a year ago by Blackboard co-founder Michael Chasen, integrates
                            exclusively...</p>
                    </div>
                    <hr style="margin: 30px 0px 24px 0px;width: 844.002px;
                    height: 0.5px;">
                    <div class="noidung1" style="margin-top:10px ;">
                        <div class="phan1">
                            <img src="img_Course detail/image 12.png" alt="">
                            <div class="thongtin">
                                <p>Lina</p>
                                <img src="img_Course detail/Vector.png" alt="">
                            </div>
                            <div class="chuthich">
                                <img src="img_Course detail/clock.png" alt="">
                                <p>3 Month</p>
                            </div>
                        </div>
                        <p>Class, launched less than a year ago by Blackboard co-founder Michael Chasen, integrates
                            exclusively...</p>
                    </div>
                </div>
            </div>
            <?php foreach ($results as $item) : ?>
                <?php if ($item['ID'] == $a) : ?>
                    <div class="khoicanh">
                        <div class="noidungcanh">
                            <img src="img_Blog/<?= $item['ANH'] ?>">
                            <div class="chuanh">
                                <p class="chu1">$<?= $item['GIA'] ?></p>
                                <!-- <p class="chu2"><del>$99.99</del></p>
                        <p class="chu3">50% Off</p> -->
                            </div>

                            <div class="chu4">
                                <p>11 hour left at this price</p>
                            </div>
                            <div class="khoicanh2">
                                <p><a href="../../asm_1/BE/add_gio_hang.php?id=<?= $a?>" style="text-decoration: none;color: black;" 
                                onclick="return confirm('Bạn muốn thêm sản phẩm này vào giỏ hàng')">Thêm vào giỏ hàng</a></p>
                                                                <!-- Biến $a ở đây chính là ID của sản phẩm trong bảng products -->
                            </div>
                            <hr style="margin: 30px 0px 30px 0px;width: 100%;
                height: 0.5p">
                            <div class="khoi1">
                                <p>This Course included</p>
                                <div class="khoichu">
                                    <img src="img_Course detail/anh1.png" alt="">
                                    <p>Money Back Guarantee</p>
                                </div>
                                <div class="khoichu">
                                    <img src="img_Course detail/anh2.png" alt="">
                                    <p>Access on all devices</p>
                                </div>
                                <div class="khoichu">
                                    <img src="img_Course detail/anh3.png" alt="">
                                    <p>Certification of completion</p>
                                </div>
                                <div class="khoichu">
                                    <img src="img_Course detail/anh4.png" alt="">
                                    <p>32 Molduls</p>
                                </div>
                                <hr style="margin: 30px 0px 34px 0px;width: 100%;
                    height: 0.5p">
                                <div class="khoicanhchucuoi">
                                    <p class="chu1cuoi">Training 5 or more people</p>
                                    <p class="chu2cuoi"><?= $item['THONGTIN'] ?></p>
                                </div>
                                <hr style="margin: 30px 0px 40px 0px;width: 100%;
                    height: 0.5p">
                                <p>Share This Course</p>
                                <div class="icon">
                                    <div class="icon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM22.1 11.5C22.8 11.4 23.4 11.3 24 11C23.6 11.7 23 12.3 22.3 12.7C22.5 17.4 19.1 22.5 13 22.5C11.2 22.5 9.5 21.9 8 21C9.7 21.2 11.5 20.7 12.7 19.8C11.2 19.8 10 18.8 9.6 17.5C10.1 17.6 10.6 17.5 11.1 17.4C9.6 17 8.5 15.6 8.5 14.1C9 14.3 9.5 14.5 10 14.5C8.6 13.5 8.1 11.6 9 10.1C10.7 12.1 13.1 13.4 15.8 13.5C15.3 11.5 16.9 9.5 19 9.5C19.9 9.5 20.8 9.9 21.4 10.5C22.2 10.3 22.9 10.1 23.5 9.7C23.3 10.5 22.8 11.1 22.1 11.5Z" fill="#696984" />
                                        </svg>
                                    </div>
                                    <div class="icon2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                            <path d="M0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16Z" fill="#696984" />
                                            <path d="M24 16C24 11.6 20.4 8 16 8C11.6 8 8 11.6 8 16C8 20 10.9 23.3 14.7 23.9V18.3H12.7V16H14.7V14.2C14.7 12.2 15.9 11.1 17.7 11.1C18.6 11.1 19.5 11.3 19.5 11.3V13.3H18.5C17.5 13.3 17.2 13.9 17.2 14.5V16H19.4L19 18.3H17.1V24C21.1 23.4 24 20 24 16Z" fill="white" />
                                        </svg>
                                    </div>

                                    <div class="icon3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" hei0ght="32" viewBox="0 0 32 32" fill="none">
                                            <path d="M0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16Z" fill="#696984" />
                                            <path d="M23.6 12.0999C23.4 11.3999 22.9 10.8999 22.2 10.6999C21 10.3999 15.9 10.3999 15.9 10.3999C15.9 10.3999 10.9 10.3999 9.60001 10.6999C8.90001 10.8999 8.4 11.3999 8.2 12.0999C8 13.3999 8 15.9999 8 15.9999C8 15.9999 8 18.5999 8.3 19.8999C8.5 20.5999 9 21.0999 9.7 21.2999C10.9 21.5999 16 21.5999 16 21.5999C16 21.5999 21 21.5999 22.3 21.2999C23 21.0999 23.5 20.5999 23.7 19.8999C24 18.5999 24 15.9999 24 15.9999C24 15.9999 24 13.3999 23.6 12.0999ZM14.4 18.3999V13.5999L18.6 15.9999L14.4 18.3999Z" fill="white" />
                                        </svg>
                                    </div>
                                    <div class="icon4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                            <path d="M0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16Z" fill="#696984" />
                                            <path d="M15.9992 9.20001C18.1992 9.20001 18.4992 9.20001 19.3992 9.20001C20.1992 9.20001 20.5992 9.40001 20.8992 9.50001C21.2992 9.70001 21.5992 9.80001 21.8992 10.1C22.1992 10.4 22.3992 10.7 22.4992 11.1C22.5992 11.4 22.6992 11.8 22.7992 12.6C22.7992 13.5 22.7992 13.7 22.7992 16C22.7992 18.3 22.7992 18.5 22.7992 19.4C22.7992 20.2 22.5992 20.6 22.4992 20.9C22.2992 21.3 22.1992 21.6 21.8992 21.9C21.5992 22.2 21.2992 22.4 20.8992 22.5C20.5992 22.6 20.1992 22.7 19.3992 22.8C18.4992 22.8 18.2992 22.8 15.9992 22.8C13.6992 22.8 13.4992 22.8 12.5992 22.8C11.7992 22.8 11.3992 22.6 11.0992 22.5C10.6992 22.3 10.3992 22.2 10.0992 21.9C9.79922 21.6 9.59922 21.3 9.49922 20.9C9.39922 20.6 9.29922 20.2 9.19922 19.4C9.19922 18.5 9.19922 18.3 9.19922 16C9.19922 13.7 9.19922 13.5 9.19922 12.6C9.19922 11.8 9.39922 11.4 9.49922 11.1C9.69922 10.7 9.79922 10.4 10.0992 10.1C10.3992 9.80001 10.6992 9.60001 11.0992 9.50001C11.3992 9.40001 11.7992 9.30001 12.5992 9.20001C13.4992 9.20001 13.7992 9.20001 15.9992 9.20001ZM15.9992 7.70001C13.6992 7.70001 13.4992 7.70001 12.5992 7.70001C11.6992 7.70001 11.0992 7.90001 10.5992 8.10001C10.0992 8.30001 9.59922 8.60001 9.09922 9.10001C8.59922 9.60001 8.39922 10 8.09922 10.6C7.89922 11.1 7.79922 11.7 7.69922 12.6C7.69922 13.5 7.69922 13.8 7.69922 16C7.69922 18.3 7.69922 18.5 7.69922 19.4C7.69922 20.3 7.89922 20.9 8.09922 21.4C8.29922 21.9 8.59922 22.4 9.09922 22.9C9.59922 23.4 9.99922 23.6 10.5992 23.9C11.0992 24.1 11.6992 24.2 12.5992 24.3C13.4992 24.3 13.7992 24.3 15.9992 24.3C18.1992 24.3 18.4992 24.3 19.3992 24.3C20.2992 24.3 20.8992 24.1 21.3992 23.9C21.8992 23.7 22.3992 23.4 22.8992 22.9C23.3992 22.4 23.5992 22 23.8992 21.4C24.0992 20.9 24.1992 20.3 24.2992 19.4C24.2992 18.5 24.2992 18.2 24.2992 16C24.2992 13.8 24.2992 13.5 24.2992 12.6C24.2992 11.7 24.0992 11.1 23.8992 10.6C23.6992 10.1 23.3992 9.60001 22.8992 9.10001C22.3992 8.60001 21.9992 8.40001 21.3992 8.10001C20.8992 7.90001 20.2992 7.80001 19.3992 7.70001C18.4992 7.70001 18.2992 7.70001 15.9992 7.70001Z" fill="white" />
                                            <path d="M15.9992 11.7C13.5992 11.7 11.6992 13.6 11.6992 16C11.6992 18.4 13.5992 20.3 15.9992 20.3C18.3992 20.3 20.2992 18.4 20.2992 16C20.2992 13.6 18.3992 11.7 15.9992 11.7ZM15.9992 18.8C14.4992 18.8 13.1992 17.6 13.1992 16C13.1992 14.5 14.3992 13.2 15.9992 13.2C17.4992 13.2 18.7992 14.4 18.7992 16C18.7992 17.5 17.4992 18.8 15.9992 18.8Z" fill="white" />
                                            <path d="M20.3992 12.6C20.9515 12.6 21.3992 12.1523 21.3992 11.6C21.3992 11.0477 20.9515 10.6 20.3992 10.6C19.8469 10.6 19.3992 11.0477 19.3992 11.6C19.3992 12.1523 19.8469 12.6 20.3992 12.6Z" fill="white" />
                                        </svg>
                                    </div>
                                    <div class="icon5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                            <path d="M0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16Z" fill="#696984" />
                                            <path d="M8.09992 15.7083C12.3949 13.8371 15.2589 12.6034 16.6919 12.0074C20.7834 10.3056 21.6335 10.01 22.1877 10.0001C22.3095 9.99805 22.582 10.0283 22.7586 10.1715C22.9076 10.2924 22.9486 10.4558 22.9683 10.5705C22.9879 10.6851 23.0123 10.9464 22.9929 11.1505C22.7712 13.4801 21.8118 19.1335 21.3237 21.7427C21.1172 22.8468 20.7105 23.217 20.3168 23.2532C19.4613 23.3319 18.8116 22.6878 17.9829 22.1446C16.6862 21.2946 15.9537 20.7654 14.695 19.936C13.2404 18.9774 14.1834 18.4506 15.0124 17.5896C15.2293 17.3643 18.999 13.9355 19.0719 13.6244C19.0811 13.5855 19.0895 13.4405 19.0034 13.3639C18.9172 13.2874 18.7901 13.3136 18.6983 13.3344C18.5683 13.3639 16.4968 14.7331 12.4839 17.4419C11.8959 17.8457 11.3633 18.0424 10.8862 18.0321C10.3601 18.0207 9.34822 17.7346 8.59598 17.4901C7.67333 17.1902 6.94002 17.0316 7.00388 16.5223C7.03714 16.257 7.40248 15.9856 8.09992 15.7083Z" fill="white" />
                                        </svg>
                                    </div>
                                    <div class="icon6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                            <path d="M0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16Z" fill="#696984" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.6 10.3C20.1 8.8 18.1 8 16 8C11.6 8 8 11.6 8 16C8 17.4 8.40001 18.8 9.10001 20L8 24L12.2 22.9C13.4 23.5 14.7 23.9 16 23.9C20.4 23.9 24 20.3 24 15.9C24 13.8 23.1 11.8 21.6 10.3ZM16 22.6C14.8 22.6 13.6 22.3 12.6 21.7L12.4 21.6L9.89999 22.3L10.6 19.9L10.4 19.6C9.69999 18.5 9.39999 17.3 9.39999 16.1C9.39999 12.5 12.4 9.5 16 9.5C17.8 9.5 19.4 10.2 20.7 11.4C22 12.7 22.6 14.3 22.6 16.1C22.6 19.6 19.7 22.6 16 22.6ZM19.6 17.6C19.4 17.5 18.4 17 18.2 17C18 16.9 17.9 16.9 17.8 17.1C17.7 17.3 17.3 17.7 17.2 17.9C17.1 18 17 18 16.8 18C16.6 17.9 16 17.7 15.2 17C14.6 16.5 14.2 15.8 14.1 15.6C14 15.4 14.1 15.3 14.2 15.2C14.3 15.1 14.4 15 14.5 14.9C14.6 14.8 14.6 14.7 14.7 14.6C14.8 14.5 14.7 14.4 14.7 14.3C14.7 14.2 14.3 13.2 14.1 12.8C14 12.5 13.8 12.5 13.7 12.5C13.6 12.5 13.5 12.5 13.3 12.5C13.2 12.5 13 12.5 12.8 12.7C12.6 12.9 12.1 13.4 12.1 14.4C12.1 15.4 12.8 16.3 12.9 16.5C13 16.6 14.3 18.7 16.3 19.5C18 20.2 18.3 20 18.7 20C19.1 20 19.9 19.5 20 19.1C20.2 18.6 20.2 18.2 20.1 18.2C20 17.7 19.8 17.7 19.6 17.6Z" fill="white" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
            <div class="danhmucsp">
                <div class="chudau">
                    <p class="chudau1">Marketing Articles</p>
                    <p class="chudau2">See all</p>
                </div>
                <div class="noidung">
                    <div class="noidung1">
                        <img src="img_Course detail/Rectangle 33.png">
                        <div class="icon">
                            <div class="icon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <rect x="0.5" y="0.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="0.5" y="11.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="11.5" y="11.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="11.5" y="0.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                </svg>
                                <p>Design</p>
                            </div>
                            <div class="icon1">
                                <img src="img_Course detail/clock.png" alt="">
                                <p>Design</p>
                            </div>
                        </div>
                        <p class="chu1">
                            AWS Certified solutions Architect
                        </p>
                        <p class="chu2">
                            Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor
                        </p>
                        <div class="iconkhoi1">
                            <div class="khoianh">
                                <img src="img_Course detail/Lina.png" alt="">
                                <p>Lina</p>
                            </div>
                            <div class="khoichuicon">
                                <p class="chu1"><del>$100</del></p>
                                <p class="chu2">$80</p>
                            </div>
                        </div>
                    </div>
                    <div class="noidung1">
                        <img src="img_Course detail/mayytinh.png">
                        <div class="icon">
                            <div class="icon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <rect x="0.5" y="0.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="0.5" y="11.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="11.5" y="11.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="11.5" y="0.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                </svg>
                                <p>Design</p>
                            </div>
                            <div class="icon1">
                                <img src="img_Course detail/clock.png" alt="">
                                <p>Design</p>
                            </div>
                        </div>
                        <p class="chu1">
                            AWS Certified solutions Architect
                        </p>
                        <p class="chu2">
                            Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor
                        </p>
                        <div class="iconkhoi1">
                            <div class="khoianh">
                                <img src="img_Course detail/Lina.png" alt="">
                                <p>Lina</p>
                            </div>
                            <div class="khoichuicon">
                                <p class="chu1"><del>$100</del></p>
                                <p class="chu2">$80</p>
                            </div>
                        </div>
                    </div>
                    <div class="noidung1">
                        <img src="img_Course detail/maytinh2.png">
                        <div class="icon">
                            <div class="icon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <rect x="0.5" y="0.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="0.5" y="11.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="11.5" y="11.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="11.5" y="0.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                </svg>
                                <p>Design</p>
                            </div>
                            <div class="icon1">
                                <img src="img_Course detail/clock.png" alt="">
                                <p>Design</p>
                            </div>
                        </div>
                        <p class="chu1">
                            AWS Certified solutions Architect
                        </p>
                        <p class="chu2">
                            Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor
                        </p>
                        <div class="iconkhoi1">
                            <div class="khoianh">
                                <img src="img_Course detail/Lina.png" alt="">
                                <p>Lina</p>
                            </div>
                            <div class="khoichuicon">
                                <p class="chu1"><del>$100</del></p>
                                <p class="chu2">$80</p>
                            </div>
                        </div>
                    </div>
                    <div class="noidung1">
                        <img src="img_Course detail/Rectangle 32.png">
                        <div class="icon">
                            <div class="icon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <rect x="0.5" y="0.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="0.5" y="11.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="11.5" y="11.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                    <rect x="11.5" y="0.5" width="9" height="9" rx="1.5" stroke="#D9D9D9" />
                                </svg>
                                <p>Design</p>
                            </div>
                            <div class="icon1">
                                <img src="img_Course detail/clock.png" alt="">
                                <p>Design</p>
                            </div>
                        </div>
                        <p class="chu1">
                            AWS Certified solutions Architect
                        </p>
                        <p class="chu2">
                            Lorem ipsum dolor sit amet, consectetur adipising elit, sed do eiusmod tempor
                        </p>
                        <div class="iconkhoi1">
                            <div class="khoianh">
                                <img src="img_Course detail/Lina.png" alt="">
                                <p>Lina</p>
                            </div>
                            <div class="khoichuicon">
                                <p class="chu1"><del>$100</del></p>
                                <p class="chu2">$80</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gioithieu">
                <div class="khoichugioithieu">
                    <div class="anhchenchu1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="73" height="73" viewBox="0 0 73 73" fill="none">
                            <circle cx="36.5" cy="36.5" r="36.5" fill="#33EFA0" />
                        </svg>
                        <p class="chu1khoichugioithieu">Everything you can do in a physical classroom, <span>you can do
                                with
                                TOTC</span></p>
                    </div>
                    <div class="anhchenchu2">
                        <p class="chu2khoichugioithieu">TOTC’s school management software helps traditional and online
                            schools manage scheduling, attendance, payments and virtual classrooms all in one secure
                            cloud-based system.</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15Z" fill="#33EFA0" />
                        </svg>
                    </div>
                    <p class="chu3khoichugioithieu">Learn more</p>
                </div>
                <div class="khoividgioithieu">
                    <img src="img_Course detail/confident-teacher-explaining-lesson-pupils 1.png" alt="">
                    <div class="khoixanh1"></div>
                    <div class="khoixanh2"></div>
                </div>
            </div>
            <div class="end">
                <p>Top Education offers and deals are listed here</p>
                <div class="bangend">
                    <div class="noidungend">
                        <img src="img_Course detail/Rectangle 19.png" alt="">
                        <div class="chuend0">
                            <p>50%</p>
                        </div>
                        <div class="chuend1">FOR INSTRUCTORS</div>
                        <div class="chuend2">TOTC’s school management software helps traditional and online schools manage
                            scheduling,</div>
                    </div>
                    <div class="noidungend">
                        <img src="img_Course detail/Rectangle 19.png" alt="">
                        <div class="chuend0">
                            <p>50%</p>
                        </div>
                        <div class="chuend1">FOR INSTRUCTORS</div>
                        <div class="chuend2">TOTC’s school management software helps traditional and online schools manage
                            scheduling,</div>
                    </div>
                    <div class="noidungend">
                        <img src="img_Course detail/Rectangle 19.png" alt="">
                        <div class="chuend0">
                            <p>50%</p>
                        </div>
                        <div class="chuend1">FOR INSTRUCTORS</div>
                        <div class="chuend2">TOTC’s school management software helps traditional and online schools manage
                            scheduling,</div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer" style="margin-top:50px ;">
            <div class="chudau">
                <div class="footerlogo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="79" height="79" viewBox="0 0 79 79" fill="none">
                        <path d="M35.9645 2.94975C37.9171 0.997129 41.0829 0.997127 43.0355 2.94975L76.0502 35.9645C78.0029 37.9171 78.0029 41.0829 76.0503 43.0355L43.0355 76.0502C41.0829 78.0029 37.9171 78.0029 35.9645 76.0503L2.94975 43.0355C0.997129 41.0829 0.997127 37.9171 2.94975 35.9645L35.9645 2.94975Z" stroke="#49BBBD" stroke-width="2" />
                    </svg>
                    <p>TOTC</p>
                </div>
                <div class="footerchu">
                    <p>Virtual Class for Zoom</p>
                </div>
            </div>
            <p>Subscribe to get our Newsletter</p>
            <div class="nhap">
                <input type="text" placeholder="Your Email">
                <button>
                    <p>Subscribe</p>
                </button>
            </div>
            <div class="chu3khoi">
                <p>Careers</p>
                <div class="chu1">Privacy Policy</div>
                <div class="chu2">Terms & Conditions</div>
            </div>
            <div class="chucuoifooter">
                <p>© 2021 Class Technologies Inc. </p>
            </div>
        </div>

    </div>
</body>

</html>