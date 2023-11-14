<?php
	$products = [
	    ['id'=>1,'name'=>'Máy giặt LG 320G', 'image'=>'máy giặt.jpeg','price'=>12000000, 'quantity'=>'1000'],
	    ['id'=>2,'name'=>'Iphone 14 Pro Max 128GB', 'image'=>'anh2.jpeg','price'=>26900000, 'quantity'=>'700'],
	    ['id'=>3,'name'=>'Samsung Galaxy S23 256GB', 'image'=>'anh3.jpeg','price'=>21990000, 'quantity'=>'1600'],
	    ['id'=>4,'name'=>'MacBook Air 13-inch M1 (8GB/256GB)', 'image'=>'anh4.jpeg','price'=>19000000, 'quantity'=>'7000'],
	    ['id'=>5,'name'=>'MacBook Air M2 13.6" 2022 - 512GB', 'image'=>'anh5.jpeg','price'=>35990000, 'quantity'=>'100'],
	];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="common.css">
</head>

<body>
    <div class="container">
        <header><img src="images/xbanner-trang-lien-he-moi.jpg.pagespeed.ic.FQvWHe7Pcx.jpg"></header>
        <!--Menu-->
        <nav>
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="about.html">Giới thiệu</a></li>
                <li><a href="news.html">Tin tức</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
                <li><a href="album.html">Kho ảnh</a></li>
            </ul>
        </nav>
        <!--End menu-->
        <!--List products-->
        <article>
        <?php foreach( $products as $product ) : ?>
            <div class="col">
                <div class="product">
                    <a href="#">
                    <img src="images/<?= $product['image'] ?>"
                        width="110" alt=" ">
                        <h3><?= $product['name']?></h3>
                        <div class="price"><?= $product['price']?></div>
                        <div class="price">số lượng <?= $product['quantity']?></div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach ?>
        </article>
        <!--End list prodcts-->

        <footer>
            <p>&copy; (c) Academy PolyTechnic</p>
        </footer>
      
    </div>
</body>

</html>