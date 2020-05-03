<?php
//vong lap
$a=[1,2,3];
for($i=0;$i<count($a);$i++){
    echo $a[$i]."<br>";
}

foreach($a as $value){
    echo $value."<br>";
}

$user=['name'=>'nghiahsgs','age'=>20];
foreach($user as $key=>$value){
    echo $value."<br>";
}

// dung foreasch duoc ua chuong hon trong php
//vi da so mang trong php la associative array, chu khong phai normal array

// vd trong thuc te
$users=[
    ['name'=>'nghiahsgs','age'=>20,'money'=>123],
    ['name'=>'emlamwap','age'=>22,'money'=>456]
];
foreach($users as $user){
    echo $user['name']."<br>";
}

// luu y voi nhung ai lan dau tiep xuc voi foreach se rat la lam
// vi vay can luyen tap them , search google 'foreach trong php'


?>