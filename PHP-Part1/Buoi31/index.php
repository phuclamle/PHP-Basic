<?php 
/* 
Bài 1: Viết chương trình lấy 5 kí tự cuối chuỗi
chuỗi là tiếng việt- tiếng việt ko dấu
*/

$str = "Hoc lap trinh";

// Nếu tham số thứ 2 là âm. thì cắt từ cuối lên
$endStr = substr($str,-5);
echo '5 kí tự cuối của chuỗi str là:'.$endStr."</br>";

$str2 = "Học lập trình";
// Hàm hỗ trợ tiếng việt mb_substr
echo $endStr2 = mb_substr($str2,-5,null,'UTF-8');
echo '5 kí tự cuối của chuỗi là:'.$endStr."</br>";

/*Bài 2: Viết chương trình xóa chữ đầu tiên trong chuỗi
Input: Phạm Ngọc Hùng
Output: Ngọc Hùng 
*/
$strName = 'Pham Ngoc Hung';
// tính vị trí khoảng trắng đầu tiên
$posSpace =strpos($strName,' ');
echo '</br>'.$posSpace;

// tính vị trí của chữ N
$posStr = $posSpace +1;

// độ dài muốn cắt
$endWordLen = strlen($strName) - $posStr;

// cắt chuỗi
$endWord = substr($strName,$posStr,$endWordLen);
echo '</br>';
echo $endWord;

// Chuỗi có dấu

$strName2 = 'Phạm Ngọc Hùng';
// tính vị trí khoảng trắng đầu tiên
$posSpace2 =mb_strpos($strName2,' ',0,'UTF-8');
echo '</br>'.$posSpace2;

// tính vị trí của chữ N
$posStr2 = $posSpace2 +1;

// độ dài muốn cắt
$endWordLen2 = mb_strlen($strName2,'UTF-8') - $posStr2;

// cắt chuỗi
$endWord2 = mb_substr($strName2,$posStr2,$endWordLen2);
echo '</br>';
echo $endWord2;



