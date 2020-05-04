<?php
    // number
    $money=1000;
    $pi=3.14;

    // toan tu co ban: +,-,*,/,^
    echo $money+5000;
    //thu tu thuc hien phep toan: nhan chia trc, cong tru sau
    // neu ko chac chan ve thu tu => dung dau ngoac (), ko nen dung dau ngoac vuong hoac ngoac nhon de bieu thi su uu tien trong lap trinh 

    echo 2+2*2;

    // ++, -- , +=, -=
    //$i++

    echo '2'+'3'; // tu dong ep kieu => chuoi + chuoi => so + so

    // ep kieu chu dong
    echo float('2');
    echo int('2')+4;

    // lam tron
    echo ceil(3.4); // ceil : noc nha => lam tron len // lay phan nguyen +1
    echo floor(3.8); // floor: san nha => lam tron xuong // lay phan nguyen
    echo round(3.8); // lam tron theo quy tac trong toan hoc // lay so nguyen gan nhat

    echo pi(); // get value of pi



?>
