<?php 
session_start();


// Khởi tạo session

$_SESSION['username'] = "Hienu";
$_SESSION['user'] = "Marketing";
$_SESSION['login'] = "Phuc Lam Le";

// xóa session
unset($_SESSION['username']);

 session_destroy();

// sửa session
$_SESSION['user'] = "Học lập trình PHP";

echo '<pre>';
print_r($_SESSION['username']);
print_r($_SESSION['user']);
print_r($_SESSION['login']);
echo '<pre>';



