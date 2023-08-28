<?php
$bien1 = -12;
if($bien1 >0){
    echo "Biến 1 nhỏ hơn 0";
}
elseif($bien1 == 5){
    echo "Biến 1 bằng 5";
}
elseif($bien1 ==10){
    echo "Biến 1 lớn nhất";
}else{
    echo "Đây là các trường hợp còn lại";
}

//if-else lồng nhau
if($bien1<0){
    echo "Biến 1 đủ điều kiện <br>";
    if($bien1 > 10){
        echo "Biến 1 là số lớn";
    }else{
        echo "Biến 1 là số nhỏ";
    }
}
 ?>