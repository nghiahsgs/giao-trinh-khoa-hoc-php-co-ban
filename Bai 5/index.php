<?php
//chuỗi
//chuỗi trong php là được đặt giữa 2 dấu nháy đơn hoặc nháy kép
$name='nguyen ba nghia';
$name="nguyen ba nghia";
$name='nguyen "ba" nghia';
$name="nguyen 'ba' nghia";

$name="nguyen \"ba\" nghia";
$name='nguyen \'ba\' nghia';

// '' render một cách chính xác, có gì nó hiểu đó trong dấu nháy
// "" nếu trong dấu nháy kép có tên biến, thì nó sẽ hiểu là thay tên biến đó bằng giá trị của nó

// để nối chuỗi ta dùng dấu chấm
$hello='hello cac ban, mk la '.$name;
$hello="hello cac ban, mk la $name";

echo $name[0]; //first character of string
strlen($name); // độ dài của chuỗi hoắc số characters trong chuỗi
str_replace('nghia','anh j dep trai','hello nghia'); // hello anh j dep trai
strtolower($name);
strtoupper($name);

//và vô số hàm xử lý chuối khác, lúc cần dùng thì search gg chứ ko cần nhớ làm gì

//tác chuỗi => rat quan trong khi làm tool
preg_match($pattern, $chuoi, $match);
print_r($match);
preg_match_all($pattern, $chuoi, $match);
print_r($match);

?>