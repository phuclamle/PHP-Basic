<?php 
// Các hàm xử lý mảng trong PHP

$arr = array('HTML','JS','PHP');

// thêm key vào trước mảng
$arr2 = ['key1'=>'HTML',
         'key2'=>  'JS',
         'key3'=>  'PHP',
         'key4' => 'C++'];

//  Hàm count để tính tổng
//echo count($arr2);

// Hàm array_values có tác dụng đưa mảng về dạng tuần tự
$arrayNew = array_values($arr2);

echo '<pre>';
    print_r($arrayNew);
echo '</pre>';


// array_keys: Hàm có tác dụng trả về một mảng tuần tự với phần tử có giá trị là key của mảng ban đầu
$arrayKey = array_keys($arr2);
echo 'Hàm array_key';
echo '<pre>';
    print_r($arrayKey);
echo '</pre>';

//array_pops: trả về phần tử cuối cùng của mảng
echo array_pop($arr2)."</br>";

//is_array: kiểm tra biến có phải dạng mảng hay không
$bien =0;
echo is_array($bien);



