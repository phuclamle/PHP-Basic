
<!-- // Client gửi lên: Phương thức POST sẽ gửi dữ liệu qua form HTML 
// và các giá trị sẽ được định nghĩa trong các input gồm các kiểu 
// (textbox,radio...) và được nhận dạng thông qua tên(name) của các input đó

// Server nhận dữ liệu: Tất cá dữ liệu gửi = POST đều được lưu trong một biến toàn cục
// $_POST do PHP tự tạo ra -->


<form method="POST" action="">
    <input type="text" name="fullname" placeholder="Họ tên">
    <input type="text" name="email" placeholder="Email">
    <button type="submit">Gửi</button>
</form>

<?php 
// echo "<pre>";
//     print_r($_POST);
// echo "</pre>";
    if(isset($_POST['fullname'])){
        echo $_POST['fullname'];
    }
    if(isset($_POST['email'])){
        echo $_POST['email'];
    }
   