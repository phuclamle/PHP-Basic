<?php 
// Hàm htmlentities được sử dụng đê chuyển đổi các kí tự đặc biệt trong chuỗi thành chuôi và các thẻ html tương ứng thay thế cho các
// kí tự đặc biệt đó
$chuoi6 = '<h1>hienu</h1>';
echo htmlentities($chuoi6)."</br>";

// Hàm html_entity_decode: ngược với hàm htmlentities, chuyển đổi các mã html thành  các kí tự đặc biệt tương ứng
echo html_entity_decode($chuoi6)."</br>";

// hàm strip_tags: loại bỏ các thẻ html và php ra khỏi chuỗi và chỉ giữ lại nội dung văn bản thuần túy
echo strip_tags($chuoi6)."</br>";
