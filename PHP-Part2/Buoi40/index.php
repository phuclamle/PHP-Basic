<?php 
$arr = array('CR7','Messi','Kaka');

// thêm key vào trước mảng
$arr2 = ['key1'=>'HTML',
         'key2'=>  'JS',
         'key3'=>  'PHP',
         'key4' => 'C++'];

//  array_push: thêm một hoặc nhiều phần tử và trả về số lượng sau khi thêm
$result =array_push($arr,'Ronney','Nani');
echo '<pre>';
    print_r($arr);
echo '</pre>';

echo $result;

//array-shift: hàm xóa phần tử đầu tiên và trả về phần tử vừa xóa

array_shift($arr);
echo '<pre>';
    print_r($arr);
echo '</pre>';
// array-unshift: Thêm một hoặc nhiều phần tử vào đầu mảng, trả về số lượng phần tử sau khi thêm

echo "Thêm phần tử vào đầu mảng: ";

$kq =array_unshift($arr,'CR7','De Gea');
echo '<pre>';
    print_r($arr);
echo '</pre>';
// trả về số lượng phần tử của mảng sau khi thêm
echo $kq;
// Hàm in_array tìm kiếm value có trong mảng hay không
$inArr = in_array('Ricardo',$arr);
echo 'Kết quả:'.$inArr;
