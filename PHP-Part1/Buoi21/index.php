<?php 
$i =0;
for($i;$i<10;$i++){
    if($i==5){
        // i =5 break sẽ làm thoát khỏi vòng lặp
        //break;
        // i =5 continue sẽ bỏ qua nhảy đến lần lặp tiếp theo
        continue;
    }
    echo $i."</br>";
}
// die sẽ làm dừng chương trình
//die();

//exit cũng sẽ làm dừng chương trình và in ra dòng chữ bên trong
exit('Dừng chương trinh');


if($demSoChan >0){
    echo "Tìm thấy $demSoChan số chẵn là: $resultSoChan";
 }else{
    echo "Không tìm thấy số chẵn nào";
 }

 if($demSoLe >0){
    echo "Tìm thấy $demSoLe số lẻ là: $resultSoLe";
 }else{
    echo "Không tìm thấy số lẻ nào";
 }

 //Bài 2
 $n = 10;
if($n >0){
    //xử lý tính giai thừa
    $result = 1;
    for($i =1; $i<=$n; $i++){
        $result *=$i;
    }
    echo "Kết quả giai thừa là:".$result."</br>";
}else{
    echo $n."Không hợp lệ";
}
 
?>