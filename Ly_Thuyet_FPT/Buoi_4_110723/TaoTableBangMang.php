<?php
// khai báo 1 mảng 
$mang=[
    [
        "ID"=> "1",
        "NAME"=> "Iphne14",
        "IMAGE"=> "iphone.img",
    ],
    [
        "ID"=> 2,// thử thui nhá chứ theo logic thì dòng này sai
        "NAME"=> "SAMSung",
        "IMAGE"=> "samsung.img",
    ]
];
echo $mang[1]["ID"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>IMG</th>
        </tr>
        <?php foreach($mang as $i) : ?>
            <tr>
                <td><?=$i['ID'] ?></td>
                <td><?=$i['NAME'] ?></td>
                <td>
                    <img src="image/<?=$i['IMAGE'] ?>">
                </td>
            </tr>            
        <?php endforeach?>
    </table>
</body>
</html>