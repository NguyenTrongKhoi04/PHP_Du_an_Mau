<form action="" method="POST">

<div class="loc">
    <div class="locsp"><button type="submit" name="giatien" value="<?= $a = 2 ?>">
            <p>Mobile</p>
        </button></div>
    <div class="locsp"><button type="submit" name="giatien" value="<?= $a = 4 ?>">
            <p>Web</p>
        </button></div>
    <div class="locsp"><button type="submit" name="giatien" value="<?= $a = 5 ?>">
            <p>Data</p>
        </button></div>
</div>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
    <?php for ($i = 0; $i <= 4; $i++) { ?>
        <!-- <?php if ($products[$i]['maloai'] == $c) : ?> -->
        <div class="listcourse">
            <?php for ($n = $dem; $n < count($products); $n++) { ?>
                <div class="sanpham">
                    <a href="course_detail.php?a=<?= $products[$n]['mahh'] ?>">
                        <img src="img_Blog/<?= $products[$n]['hinh'] ?>" alt="">
                        <div class="chusanpham">
                            <p><?= $products[$n]['tenhh'] ?></p>
                        </div>
                    </a>
                </div>
                <?php $dem++; ?> 
                <?php if ($dem % 4 == 0) {break;} ?>
            <?php } ?>
        </div>
    <?php endif ?>
<?php } ?>

<div class="nut">
    <button>1</button>
    <button>2</button>
    <button>3</button>
    <button>4</button>
</div>
<?php endif ?>
</form>