<?php 
//include dùng để import file khác vào, nếu import gặp lỗi, các câu lệnh bên dưới vẫn chạy
// include 'vonglap.php';
// include ('./vonglap.php

// file vonglap.php chỉ được import 1 lần duy nhất
// include_once('vonglap.php');


//require dùng để import file khác vào, nếu import gặp lỗi,  các câu lệnh bên dưới sẽ dừng
// require ('vonglap.php');
try {
    require_once( 'vonglap.ph');
 
} catch (Exception $e) {
     echo $e->getMessage();
}
echo "djgoivnf";

?>