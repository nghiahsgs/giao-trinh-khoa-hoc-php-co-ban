<?php
//Mang mot chieu
//normal array
$A=[1,2,3,4,'nguyen nghia']; // tap hop cac phan tu, cac kieu deu duoc
print_r($A); // ham nay dung de display array

//kieu khai bao array cu
$A=array(1,2,3,4);
print_r($A);

// lay ra mot phan tu cua mang
echo($A[1]);

// gan lai gia tri cho mot phan tu cua mang
$A[1]=100;

//them phan tu vao mang
array_push($A,100);
//them phan tu vao mang C2
$A[]=200;

// lay ra so phan tu trong mang
echo count($A);

// gop 2 array thanh 1 : merge
$a=[1,2,3];
$b=[4,5,6];
$c=array_merge($a,$b);
print_r($c);


// associative array, tap hop cua cac key va value
$numbers=[
    'one'=>'1',
    'two'=>'2',
    'three'=>'3',
    'four'=>'4'
]; // cung the khai bao associative array theo cach cu, dung function array()
print_r($numbers);

echo $numbers['three'];// lay ra mot phan tu
$numbers['three']='333'; // gan gia tri moi
print_r($numbers);

array_merge($numbers,$numbers2); // merge 2 array
echo count($numbers);


// ve co ban: trong php: associative array la tong quat cho moi array
// normal array cung chinh la associative array voi key la cac so tu nhien tu 0 den N-1 voi N la tong so phan tu cua array normal array

?>