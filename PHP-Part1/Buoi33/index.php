<?php 
$bienToanCuc = 100;
function makeTotal($a,$b){
    $tong = $a+$b;
    // echo 'Tổng là: '.$tong;
    return $tong;
}
// biến $tong là biến cục bộ
// echo $tong;

function doCount(){
    // hai biến $tong trên và dưới hoàn toàn khác nhau
    // $tong = 0;
    // echo $tong;

    // global $bienToanCuc;
    // echo 'Biến toàn cục'.$bienToanCuc;

    // static là biến tĩnh: Không thay đổi giá trị khi gọi hàm
   static $number = 0;
    $number++;
    echo $number."</br>";
}

doCount();
doCount();
$tong = makeTotal(6,5);
echo $tong;