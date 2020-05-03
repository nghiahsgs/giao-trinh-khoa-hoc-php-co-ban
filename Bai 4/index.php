<?php
//Biến và hằng
// define('NAME','NGHIAHSGS')
$name='nghiahsgs';
$age='20';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Thông tin cá nhân</p>
    <p>Tuổi</p>
    <table>
        <th>
            <td>Thông tin cá nhân</td>
            <td>Tên</td>
            <td>Tuổi</td>
        </th>
        <tr>
            <td></td>
            <td><?php echo $name;?></td>
            <td><?php echo $age;?></td>
        </tr>
    </table>
</body>
</html>