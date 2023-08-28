<!-- Xử lý DateTime -->
<!-- Hàm date() sẽ xuất ra một chuỗi thời gian dựa theo định dạng được truyền vào và số nguyên timestamp -->
<!-- Cú pháp: date($format,$timestamp); -->
<!-- $timestamp là một số nguyên timestamp, nếu không truyền tham số này, sẽ lấy timestamp của thời điểm hiện tại -->
<?php 
// đặt múi giờ 
// lấy thời gian hiện tại
date_default_timezone_set('Asia/Ho_Chi_Minh');
// Nếu định dạng H viết hoa là định dạng 24h, viết thường là 12h
$date = date('y:m:d H:i:s');
echo $date."</br>" ;
echo date_default_timezone_get()."</br>";


// Hàm time(): sẽ lấy tiemstamp của thời điểm hiện tại.Hàm trả về số giây tính từ thời điểm 1/1/1970

echo "Timestamp của thời điểm hiện tại:".time();

// hàm strtotime(): sẽ phân tích bất kì chuỗi thời gian bằng tiếng anh thành dạng timestamp của thời gian đó

// now, 21 March 1996, next Monday -> strtotime()

echo "</br>";
echo strtotime('now').'</br>';
echo 'Timestamp của 21 march 1996:'.strtotime('21 March 1996')."</br>";
echo 'Timestamp của Next monday:'.strtotime('Next monday');
