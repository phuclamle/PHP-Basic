<?php 
// Hàm ucwords: chuyển tất cả các chữ cái đầu tiên của các từ sang dạng viết hoa
$chuoi12 = "vu tru marketing";
echo 'Hàm ucwords:'.ucwords($chuoi12);

// Hàm trim: xóa kí tự ở đầu và cuối. Nếu không nhập tham số thứ 2 thì hiếu là khoảng trắng
$chuoi13 = 'k hienu k';
echo trim($chuoi13, 'k')."</br>";

// Hàm json _encode và json_decode

// Hàm json_encode: chuyển arr hoặc object thành JSON(nén)
$arr = [1,2,3,4,5];
$json_encode = json_encode($arr);
echo $json_encode;
echo "</br>";
var_dump($json_encode);
echo "chuỗi json sau khi decode:";
echo "</br>";
// Hàm json_decode: chuyển chuỗi dạng JSON thành mảng hoặc Objects. Nếu tham số thứ 2 là true thì về dạng mảng
// không thì về object
$jsondecode = json_decode($json_encode,true);
print_r($jsondecode);

