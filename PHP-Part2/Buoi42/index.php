<?php  
// Hàm array_search: Tìm kiếm giá trị của mảng và trả về key phần tử đó nếu có


$arr = array('CR7','Messi','Kaka','Rooney','Nani','De Gea','De Gea');

$arr2 = ['key1'=>'HTML',
         'key2'=>  'JS',
         'key3'=>  'PHP',
         'key4' => 'C++'];
$searchArr=array_search('Messi',$arr);
echo 'Đây là vị trí của Kaka'.$searchArr;

// array_slice: lấy ra $lenght phần tử bắt đầu từ $begin trong mảng
// array_slice($array,$begin,$lenght);

$slice_array = array_slice($arr,3,3);

echo '<pre>';
print_r($slice_array);
echo '</pre>';

// array_unique(): Hàm có tác dụng loại bỏ phần từ trùng nhau trong một mảng và trả về 
// một mảng mới khi đã loại bỏ


// Máng sau khi loại bỏ phần tử trùng lặp
$uniqueArr = array_unique($arr);
echo '<pre>';
print_r($uniqueArr);
echo '</pre>';

// array_key_exist($key,$array): Kiểm tra xem mảng $array có tồn tại khóa $key hay không .Trả về TRUE nếu tồn tại

$keyArr = array_key_exists('hienu',$arr2);
var_dump($keyArr);



