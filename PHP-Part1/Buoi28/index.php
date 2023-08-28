<?php 
// Hàm substr cắt chuỗi 7 từ vị trí 4 và có độ dài bằng 3, gán vào $chuoimoi
$chuoi7 ="hoc lap trinh PHP";
$chuoimoi = substr($chuoi7,4,3);
echo $chuoimoi."</br>";

// strstr: tách chuỗi từ kí tự cho trước đến hết chuỗi
$chuoi8 = "Vu tru marketing - Hienu";
echo strstr($chuoi8,'ma')."</br>";

// Hàm strpos: dùng để tìm chuỗi con trong chuỗi cha, nếu có trả về vị trí, nếu không trả về false
echo $strpos = strpos($chuoi8,'Vu');
 
// substr_replace: dùng để cắt bỏ 1 chuỗi và thay thế thành 1 chuỗi khác

echo substr_replace($chuoi8,"Website",6,10)."</br>";

 