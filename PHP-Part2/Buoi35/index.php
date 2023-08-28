<?php 
// Bật thông báo về lỗi
 ini_set('display_errors','1');
 ini_set('display_startup_errors','1');
 error_reporting(E_ALL);

 $bien1 = 'hienu 2022';
//  isset là hàm để kiểm tra xem $bien đã tồn tại hay chưa
 if(isset($bien1)){
    echo $bien1;
 }

//  Hàm empty kiểm tra xem biến có rỗng hay không
echo '</br>';

// $str rỗng
$str = 1;

if(!empty($str)){
    echo $str;
}else{
    echo "Không hợp lệ";
}