
<!-- try{

}
catch(){

}
=> xử lý ngoại lệ khi chương trình gặp lỗi vẫn chạy
 bình thường -->

<?php 
$age = 18;
try {
    // gõ code
    echo "Hienu-Vũ trụ marketing"."</br>";
    // hienu();
    if($age <20){
        throw new Exception('Tuổi phải lớn hơn 20');
    }
    // class Error
}catch(Error $exception){
    // hiển thị ra lý do lỗi
    echo $exception -> getMessage()."</br>";
    // hiển thị ra file bị lỗi
    echo 'File:'.$exception -> getFile()."</br>";
    // hiển thị vị trí dòng bị lỗi
    echo 'Line:'.$exception ->getLine();
}catch(Exception $exception){
    // hiển thị ra lý do lỗi
    echo $exception -> getMessage()."</br>";
    // hiển thị ra file bị lỗi
    echo 'File:'.$exception -> getFile()."</br>";
    // hiển thị vị trí dòng bị lỗi
    echo 'Line:'.$exception ->getLine();
}

echo "</br>";
echo 'Chương trình vẫn chạy bình thường';