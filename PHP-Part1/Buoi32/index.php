<?php 
include_once "./function.php";


$bien1 = 6;
$bien2 = 10;
if(function_exists('makeTotal')){
    makeTotal($bien2,$bien1);
}

//hàm function_exists để kiểm tra xem hàm đã tồn tại hay chưa
// function_exists('makeTotal');

