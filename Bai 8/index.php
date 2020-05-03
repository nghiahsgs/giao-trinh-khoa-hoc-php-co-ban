<?php
//mang nhieu chieu
$a=[
    [1,2,3],
    [4,5,6],
]; 
echo $a[0][0]; //truy cap 1 phan tu
$a[0][0]=5; //gan gia tri

// vd trong thuc te
$users=[
    ['name'=>'nghiahsgs','age'=>20,'money'=>123],
    ['name'=>'emlamwap','age'=>22,'money'=>456]
];
print_r($users);
// tong so users
echo count($users);
//lay name cua user1
echo $users[0]['name'];
echo $users[0]['age'];

//them user moi
$users[]=['name'=>'nghiahsgs2','age'=>21,'money'=>999];
print_r($users);

?>