<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gia1 = $_POST['gia1'];
    $soluong1 = $_POST['soluong1'];
    $tien1 = 0;
    $tien1 = (int)$gia1 * $soluong1;

    $gia2 = $_POST['gia2'];
    $soluong2 = $_POST['soluong2'];
    $tien2 = 0;
    $tien2 = (int)$gia2 * $soluong2;

    $gia3 = $_POST['gia3'];
    $soluong3 = $_POST['soluong3'];
    $tien3 = 0;
    $tien3 = (int)$gia3 * $soluong3;

    $gia4 = $_POST['gia4'];
    $soluong4 = $_POST['soluong4'];
    $tien4 = 0;
    $tien4 = (int)$gia4 * $soluong4;

    $gia5 = $_POST['gia5'];
    $soluong5 = $_POST['soluong5'];
    $tien5 = 0;
    $tien5 = (int)$gia5 * $soluong5;

    $tientong = 0;
    $tientong = (int)$tien1 + $tien2 + $tien3 + $tien4 + $tien5;
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
    <div class="main">
        <form action="" method="post">
            <table border="1" id="table-sp">
                <tr>
                    <th>STT</th>
                    <th>TÊN SẢN PHẨM </th>
                    <th>Số Lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>BimBim</td>
                    <td><input type="number" name="soluong1" min="0" value="<?= isset($soluong1) ? $soluong1 : ($soluong1 = 0); ?>"></td>
                    <td><input type="number" value="1000" readonly name="gia1"> </td>
                    <td><?= isset($tien1) ? $tien1 : '' ?></td>
                </tr>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Socola</td>
                    <td><input type="number" name="soluong2" min="0" value="<?= isset($soluong2) ? $soluong2 : ($soluong2 = 0) ?>"></td>
                    <td><input type="number" value="5500" readonly name="gia2"> </td>
                    <td><?= isset($tien2) ? $tien2 : '' ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Hạnh nhân</td>
                    <td><input type="number" name="soluong3" min="0" value="<?= isset($soluong3) ? $soluong3 : ($soluong3 = 0) ?>"></td>
                    <td><input type="number" value="1500" readonly name="gia3"> </td>
                    <td><?= isset($tien3) ? $tien3 : '' ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Omachi </td>
                    <td><input type="number" name="soluong4" min="0" value="<?= isset($soluong4) ? $soluong4 : ($soluong4 = 0) ?>"></td>
                    <td><input type="number" value="2500" readonly name="gia4"> </td>
                    <td><?= isset($tien4) ? $tien4 : '' ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sữa chua</td>
                    <td><input type="number" name="soluong5" min="0" value="<?= isset($soluong5) ? $soluong5 : ($soluong5 = 0) ?>"></td>
                    <td><input type="number" value="5000" readonly name="gia5"> </td>
                    <td><?= isset($tien5) ? $tien5 : '' ?></td>
                </tr>
                <tr class="tong">
                    <th colspan="4"><button type="submit">Tổng</button></th>
                    <td><?= isset($tientong) ? $tientong : '' ?></td>
                </tr>
                <tr>

                </tr>
            </table>


    </div>
    </form>
</body>

</html>