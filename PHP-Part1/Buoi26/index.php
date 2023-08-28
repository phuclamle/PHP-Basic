<?php 
// str_repeat: hàm để lặp lại chuỗi
$chuoi3 ="Học lập trình PHP";
echo str_repeat($chuoi3,3);


// str_replace: Hàm này sẽ tìm chuỗi - trong $chuoi4 và thay bằng |
$chuoi4 = "Học - lập - trình - PHP";
echo str_replace('-',' ',$chuoi4."</br>");

// md5($str): Hàm này sẽ mã hóa MD5 chuỗi $str (32 ký tự)
$chuoi5 = 'hoclaptrinh';
echo md5($chuoi5."</br>");

//sha1: Hàm này sẽ mã hóa sha1 chuỗi $str (40 ký tự)
echo sha1($chuoi5);


