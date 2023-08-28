<!-- mysql extention: ngừng phát triển => không nên sử dụng
mysqli extention: được hỗ trợ từ PHP5, không được thông dụng, phổ biến biến
PDO: Lớp được tạo sẵn trong PHP, hỗ trợ trong việc kết nối PHP với CSDL  -->
<!--  $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //Set utf8
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Tạo thông báo ra ngoại lệ khi gặp lỗi
        ];
} -->
<?php 
//  Thông tin kết nối
const _HOST = 'localhost';
const _DB = 'phuclamle_php';
// user sử dụng của PHP myadmin
const _USER = 'root';
const _PASS = '';

try{
    if(class_exists('PDO')){
        // Các thông tin kết nối
        $dsn = 'mysql: dbname'._DB.';host='._HOST;

        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //Set utf8
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Tạo thông báo ra ngoại lệ khi gặp lỗi
        ];

        $conn = new PDO($dsn,_USER,_PASS,$options);
        // var_dump($conn);
        if($conn){
            echo "Kêt nối thành công";
        }
    }
}catch (Exception $exception){
    echo '<div style = "color:red;padding: 5px 15px; border: 1px solid black;">';
    echo $exception ->getMessage()."</br>";
    echo '</div>';
    die();
}