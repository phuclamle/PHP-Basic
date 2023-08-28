<?php 
$arr = array('CR7','Messi','Kaka','Rooney','Nani');

// thêm key vào trước mảng
$arr2 = ['key1'=>'HTML',
         'key2'=>  'JS',
         'key3'=>  'PHP',
         'key4' => 'C++'];
   
// sort: sắp xếp lại mảng theo chiều tăng dần bảng chữ cái và trả về TRUE nếu thành công
// FALSE nếu không thành công
echo '<pre>';
    print_r($arr);
echo '</pre>';
$sortArr = sort($arr);
echo "mảng sau khi sắp xếp:";
echo '<pre>';
    print_r($arr);
echo '</pre>';

var_dump($sortArr);

// array_reverse: Hàm trả về mảng mới đảo ngược các phần tử trong mảng
echo "Mảng sau khi đảo ngược";
$arrayRev=array_reverse($arr);
echo '<pre>';
    print_r($arrayRev);
echo '</pre>';

// Hàm array_merge: Hàm có tác dụng nối lại 2 hay nhiều mảng
$mergeArr=array_merge($arr,$arr2);

echo "Mảng sau khi nối:";
echo '<pre>';
print_r($mergeArr);
echo '</pre>';

// array_rand: lấy ra n key ngẫu nhiên trong mảng và trả về 1 mảng tuần tự có giá trị là key vừa lấy

$randArr = array_rand($mergeArr,3);
echo "Mảng sau khi lấy key:";
echo '<pre>';
print_r($randArr);
echo '</pre>';