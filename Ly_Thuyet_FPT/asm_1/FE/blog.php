<!-- cái khối ảnh cuối =>> làm sao để css riêng cho nó  -->
<?php
session_start();
include_once "../../asm_1/BE/connection.php";

//Kiểm tra session
if (!isset($_SESSION['admin'])) {
    header("location: ../../asm_1/BE/login_user.php");
    exit();
}

// print_r($_SESSION);//kiểm tra session xem đúng ch

// biến để cắt khối xuống dòng trong for
$dem = 0;

//Lọc
$loc = $_GET['loc'] ?? '';
if ($loc == '') {
    $sql = "SELECT * FROM products";
    $results = SelectAll($sql);
} else {
    $sql = "SELECT * FROM products WHERE MALOAI='$loc'";
    $results = SelectAll($sql);
}

// thông báo đăng nhập thành công
echo '<script>alert("Xin chào ' . $_SESSION['admin']['TAIKHOAN'] . '");</script>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blog.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <!-- menu -->
        <div class="header">
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
        <div class="content">
            <div class="content1">
                <div class="chucontent1">
                    <p class="chu1">By Themadbrains in <span>inspiration</span></p>
                    <p class="chu2">Why Swift UI Should Be on the Radar of Every Mobile Developer</p>
                    <p class="chu3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempos Lorem
                        ipsum dolor sitamet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    <button>
                        <p>Start learning now</p>
                    </button>
                </div>
                <img src="img_Blog/Rectangle 32.png" alt="">
            </div>
            <p class="chuphu1"><a href="blog.php?loc=" style="text-decoration: none; color: black;">List Course</a></p>

            <div class="loc">
                <div class="locsp"><button>
                        <a href="blog.php?loc=10" style="text-decoration: none;color: black;">
                            <p>OPPO</p>
                        </a>
                    </button></div>
                <div class="locsp"><button>
                        <a href="blog.php?loc=9" style="text-decoration: none;color: black;">
                            <p>IPHONE</p>
                        </a>
                    </button></div>
                <div class="locsp"><button>
                        <a href="blog.php?loc=8" style="text-decoration: none;color: black;">
                            <p>SAMSUNG</p>
                        </a>
                    </button></div>
            </div>


            <?php for ($i = 0; $i <= 4; $i++) : ?>
                <div class="listcourse">
                    <?php for ($n = $dem; $n < count($results); $n++) : ?>
                        <div class="sanpham">
                            <a href="course_detail.php?id=<?= $results[$n]['ID'] ?>">
                                <img src="img_Blog/<?= $results[$n]['ANH'] ?>" alt="">
                                <div class="chusanpham">
                                    <p><?= $results[$n]['TEN'] ?></p>
                                </div>
                            </a>
                        </div>
                        <?php $dem++; ?>
                        <?php if ($dem % 4 == 0) {
                            break;
                        } ?>
                    <?php endfor ?>
                </div>
            <?php endfor ?>


            <div class="nut">
                <button>1</button>
                <button>2</button>
                <button>3</button>
                <button>4</button>
            </div>

        </div>
        <div class="footer">
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