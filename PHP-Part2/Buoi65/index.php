<?php 
require_once "connect.php";

// Truy vấn tất cả dữ liệu
$sql = "SELECT * FROM hocsinh";

try{
    $statement = $conn -> prepare($sql);
    $statement -> execute();
// Show dữ liệu
// FETCH_NUM: Hiển thị key dưới dạng number
// FETCH_ASSOC: Hiển thị key dưới dạng tên cột
    $data = $statement -> fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($data);
    echo '</pre>';
}catch(Exception $exp){
    echo '<div style = "color:red;padding: 5px 15px; border: 1px solid black;">';
    echo $exception ->getMessage()."</br>";
    echo '</div>';
    die();
}

// Truy vấn 1 dòng dữ liệu
$sql = "SELECT * FROM hocsinh WHERE id = ?";
// $id =10;
try{
    $statement = $conn -> prepare($sql);

    // $arr = [
    //     $id ];
    $statement -> execute([9]);
// Show dữ liệu
// FETCH_NUM: Hiển thị key dưới dạng number
// FETCH_ASSOC: Hiển thị key dưới dạng tên cột
    $data = $statement -> fetch(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($data);
    echo '</pre>';
}catch(Exception $exp){
    echo '<div style = "color:red;padding: 5px 15px; border: 1px solid black;">';
    echo $exception ->getMessage()."</br>";
    echo '</div>';
    die();
}