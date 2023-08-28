<?php 
//khai báo kiểu số nguyên 
$bien1 = 8;
$bien2 = '83';

var_dump($bien2);
//ép kiểu cho biến
$bien3 =(int)$bien2;
var_dump($bien4);
var_dump($bien3);
//kiểm tra xem có phải kiểu số nguyên hay không

//trả về 1 nếu true
echo is_int($bien1);

//kiểu dữ liệu boolean 
//trả về khoảng trống, null và 0 thì là false, ngược lại là true

//khai báo kiểu dữ liệu boolean
$bienso3 = 'true';
$bienso4 = (bool)$bienso3;
var_dump($bienso4);

//trả về số 1: kiểm tra có phải kiểu dữ liệu boolean hay không
echo is_bool($bienso4);