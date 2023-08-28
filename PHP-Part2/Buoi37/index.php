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

// Sửa mảng 
$arr[0] = 'HTMLNEW';
$arr2['key2'] = 'JavaScripts';

// Xóa phần tử
unset($arr2['key1']);


array_push($arr,'NodeJs','C','C++','C#');
echo '<pre>';
print_r($arr);
echo '</pre>';

// Đọc mảng trực tiếp từ key
$hienu =$arr2['key3'];
echo $hienu;

echo '</br>';

//Vòng lặp for
if(!empty($arr)){
    // biến count để đếm số phần tử mảng
    for($i =0; $i<count($arr);$i++){
        echo $arr[$i]."</br>";
    }
}
// Nếu đọc mảng mà là mảng tuần tự thì nên dùng for

 echo "</br>";
// dùng foreach
if(!empty($arr2)){
    foreach($arr2 as $key => $value){
        echo $value."</br>";
    }
}


