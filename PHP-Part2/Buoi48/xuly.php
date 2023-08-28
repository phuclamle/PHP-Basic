<!-- cách uploads file trong php -->
<?php 
echo 'Trang xử lý';
// Những dữ liệu mà upload lên sẽ lưu vào biến $_FILES
 //$_FILES
// $_SERVER: Biến siêu toàn cục 

// Nếu có phương thức post hoặc get xảy ra
 if(!empty($_SERVER['REQUEST_METHOD'])){
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
 }

//  lệnh move_uploaded_file để lưu tệp vào project theo mong muốn
 $result = move_uploaded_file($_FILES['hienu_upload']['tmp_name'],
 'C:\xampp\htdocs\PHP\PHP-Part2\Buoi48\uploads/'.
//  sau khi chuyển sang file mới cần đặt lại tên
 $_FILES['hienu_upload']['name']);
  var_dump($result);


?>