<?php 
//khai báo kiểu mảng
$bien_6 =  [1,2,3];
$bien_7 = '1,2,3';
//ép kiểu mảng
$bien_8 = (array)$bien_7;
var_dump($bien_8);
//kiểm tra kiểu mảng
echo is_array($bien_6);

//khai báo kiểu null
$bien7 = null;

var_dump($bien7);

//Ép kiểu sang Int => 0
//$bien7 = (int)$bien7;
//var_dump($bien7);

//Ép kiểu sang chuỗi => ""
// $bien7 = (String)$bien7;
// var_dump($bien7);

//Ép kiểu boolean => false
$bien7 = (bool)$bien7;
var_dump($bien7);

//kiểm tra xem có phải null hay không
echo is_null($bien7);
?>

