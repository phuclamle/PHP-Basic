<?php 
$bienSo1 ='hienu';
//cách nối biến-Cách 1- dùng nháy đơn biến nối với chuỗi phải có . 
$bienso2 = 'Vũ trụ marketing '.$bienSo1.' Học PHP';
//cách nối biến-cách 2- dùng nháy kép
$bienso3 = "Vũ trụ marketing $bienSo1 Học PHP";

$bienso4 = "Ngày mai em đi".$bienSo1;
$bien1 = 'một';
$bien2 = "hai";
$bien3 = 'ba';
$bien4 = 'bon';
//cú pháp nối biến
$bienTong = $bienSo1.' '.$bienso2;
echo $bienTong;

//nối chuỗi với mã HTML
//dùng class phải dùng khác với ngoặc bên ngoài để phân biệt
echo '<ul class="">
<li>'.$bien1.'</li>
<li>'.$bien2.'</li>
<li>'.$bien3.'</li>
<li>'.$bien4.'</li>

</ul>
';
echo "
<ul>
    <li>$bienSo1</li>
    <li>$bienso2</li>
    <li>$bienso3</li>
    <li>$bienso4</li>
</ul>"

?>

