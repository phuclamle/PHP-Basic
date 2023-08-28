<?php 
//Khai báo kiểu số thực
$bien4 = 12.5;
//ép kiểu
$bien5 = '122.5';
$bien6 = (float)$bien5;
var_dump($bien6);

//kiểm tra biến 4 có phải kiểu số thực hay không
echo is_float($bien4);

//kiểu chuỗi
$ten_bien = "chuỗi";
$ten_bien1 = 'chuỗi';
var_dump($ten_bien);
$bien6 = (string)$bien4;

echo is_string($bien6);
