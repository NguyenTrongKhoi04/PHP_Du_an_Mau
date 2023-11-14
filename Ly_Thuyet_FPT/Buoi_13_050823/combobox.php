<?php
include_once "connection.php";
$sql="SELECT * FROM airlines";
$result= SelectAll($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <option disabled hidden selected>Chọn</option>
        <?php foreach($result as $i) :?>
            
            <option value="<?=$i['airline_id']?>">   <?= $i['airline_name'] ?>         </option>

        <?php endforeach ?>
    </select>
</body>
</html>