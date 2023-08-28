<?php 

$chuoi1 = "Học | Lập| Trình | PHP";

//explode để cắt chuỗi thành mảng(mảng ở đây gồm 4 phần tử);
$arr = explode('|',$chuoi1);

var_dump($chuoi1);
echo "</br>";
var_dump($arr);

echo "</br>";


print_r($arr);
echo "</br>";

//hàm implode để ghép mảng về thành chuỗi

$chuoi2 = implode(' ',$arr);

echo $chuoi2;

//Hàm strlen dùng để đếm độ dài của chuõi( tính  cả các dấu chấm vì không hỗ trợ tiếng việt)
$chuoi3 =  "Học lập trình PHP";
echo strlen($chuoi3)."</br>";

//str_word_count($str) trả về số chữ trong chuỗi(không hỗ trợ tiếng việt)
echo str_word_count($chuoi3);

