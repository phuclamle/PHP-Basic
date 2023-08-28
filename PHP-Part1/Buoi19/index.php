 <?php 
 $start = 1;
 $end = 100;

 $demSoLe =0; //biến đếm số lẻ
 $demSoChan =0;// biến đếm số chẵn

 $resultSoLe = null; // Biến để lưu các số lẻ
 $resultSoChan = null; // biến để lưu các số chẵn

 for($i = $start; $i<=100; $i++){
    //Kiểm tra cái số chẵn - lẻ %
    if($i % 2 ==0){
        //$i sẽ là số chẵn
        $resultSoChan .=$i." ";
        $demSoChan++;
    }else{
        //$i sẽ là số lẻ
        $resultSoLe.=$i." ";
        $demSoLe++;
    }
 }
 

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
 