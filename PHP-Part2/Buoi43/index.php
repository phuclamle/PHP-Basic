<?php 
// is_numberic: kiểm tra kiểu số(số nguyên và số thực)
$bien1 = 4.9;
$result = is_numeric($bien1);

var_dump($result);


// is_int(): Kiểm tra kiểu số nguyên
$checkInt = is_int($bien1);
echo '</br>';
echo "Kiểm tra số nguyên:";
var_dump($checkInt);


// is_float: Kiểm tra số thực
$checkFloat = is_float($bien1);
echo "</br>"."Kiểm tra số thực:";
var_dump($checkFloat);

// Ép kiểu số nguyên
$bien2 = (int)$bien1;
echo '</br>';
var_dump($bien2);

// ép kiểu số thực
$soNguyen = 5;
$soNguyen = (float)$soNguyen;
echo '</br>';
var_dump($soNguyen);

// Làm tròn round(): Làm tròn, tham số thứ 2 là số sau dấu phẩy muốn làm tròn
$bien3 = 1.3494347343;
$kq = round($bien3,2);

echo '</br>'.$kq; 

// Làm tròn xuống floor(): hàm làm tròn xuống
$bien3 = 1.3;
$kq4 = floor($bien3);
echo '</br>';
echo 'làm tròn xuống'.'</br>';
echo $kq4;

// Làm tròn lên ceil(): Hàm làm tròn lên
$kq5 = ceil($bien3);
echo $kq5;

// Lấy số ngẫu nhiên rand()
$bien5 = rand();
echo "lấy số ngẫu nhiên".$bien5;





