<!DOCTYPE html>
<html>
<head>
	<title>Tính tiền thanh toán</title>
</head>
<body>
	<?php
	if(isset($_POST['submit'])){
	    $product_name = $_POST['product_name'];
	    $price = $_POST['price'];
	    $quantity = $_POST['quantity'];
	    $total = $price * $quantity;
	    if($quantity > 3){
	        $discount = $total * 0.1;
	        $total -= $discount;
	    }
	}
	?>
	<form method="post">
		<label for="product_name">Tên sản phẩm:</label><br>
		<input type="text" id="product_name" name="product_name"><br>
		<label for="price">Giá:</label><br>
		<input type="number" id="price" name="price"><br>
		<label for="quantity">Số lượng:</label><br>
		<input type="number" id="quantity" name="quantity"><br>
		<input type="submit" name="submit" value="Tính tiền">
	</form>
	<?php if(isset($_POST['submit'])){ ?>
	<p>Số tiền phải thanh toán là: <?php echo number_format($total); ?> VNĐ</p>
	<?php } ?>
</body>
</html>