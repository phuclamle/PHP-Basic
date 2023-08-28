<?php
// Khai báo mảng
// mảng tuần tự
$arr = array('HTML','JS','PHP');

// thêm key vào trước mảng
$arr2 = ['key1'=>'HTML',
         'key2'=>  'JS',
         'key3'=>  'PHP'];

// Mảng rỗng
$arrEmpty = [];

// in mảng
echo '<pre>';
print_r($arr2);
echo '</pre>';

// Thêm phần tử vào mảng có key

// $arr2['key4'] = 'NodeJs';

// Thêm phần tử vào mảng không có key
//  $arr[] ='C';
//  $arr[] = 'C++';
//  print_r($arr);

// in mảng
echo '<pre>';
print_r($arr2);
echo '</pre>';

array_push($arr,'NodeJs','C','C++','C#');
echo '<pre>';
print_r($arr);
echo '</pre>';

// Đọc mảng trực tiếp từ key
$hienu =$arr2['key2'];
echo $hienu;