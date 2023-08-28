<?php 
//Toán tử gán %= > % là lấy số dư
$bien6 = 10;
$bien6 %= 7; //$bien6 = $bien6 %7; =3
echo $bien6."</br>";

//Toán tử gán .= nối
$bien7 = 'phuc';
$bien7.= ' lam le'; //$bien7 = 'phuc'. 'lam le'
echo $bien7;
//nối 2 số chuyển về chuỗi
$bien18 = 5;
$bien18 .= 9;
echo $bien18;
var_dump($bien18);

//Toán tử số học %
$bien8 = 25;
$bien9 = $bien8 % 20; //dư 5;

echo "Biến 9 =".$bien9."<br>";

//Toán tử số học : lũy thừa **
$bien10 = 2;// cơ số
$bien11 = 10;// số mũ
$bienTong = $bien10 ** $bien11; //2^10
echo 'Toán tử lũy thừa ='.$bienTong.'<br>';

//Toán tử so sánh ==,===
$bien12 = 10;
$bien13 = '10';

//so sánh giá trị ==
echo $bien12 == $bien13;

//so sánh tuyệt đối cả về giá trị và kiểu dữ liệu ===
echo $bien12 === $bien13;


// var_dump($bien12);
// var_dump($bien13);

//Toán tử so sánh !=: so sánh biến 14 và 15 có khác nhau không
$bien14 = 10;
$bien15 = 15;

echo '<br>'.$bien14 != $bien15;

?>