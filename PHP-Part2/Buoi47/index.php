<!-- validate form: kiểm tra dữ liệu nhập  form -->
<!-- 
    Validate form client: Bắt lỗi bên phía người dùng
    Thẻ HTML5, JS
    Nhược điểm: Bảo mật kém, dễ dàng bị xóa code
    Validate form Server: Bắt lỗi bên phía server
    PHP
    Ưu điểm: Không thể bị tác động vào mã PHP
    Nhược điểm: Mỗi lần bắt lỗi phải load lại trang

    Bắt lỗi:
    Họ tên -> Bắt buộc và lớn hơn 5 kí tự
    Email -> Bắt buộc và phải đúng định dạng email
 -->
<?php 
    if(!empty($_POST)){

        $errors = [];
        // Bắt lỗi của fullname
        if(empty($_POST['fullname'])){
            $errors['fullname']['required'] = 'Bắt buộc phải nhập họ tên';
        }else{
            if(strlen($_POST['fullname'])<5){
                $errors['fullname']['min_length'] = 'Họ tên phải lớn hơn hoặc bằng 5 ký tự';
            }
        }

        // Bắt lỗi với email
        if(empty($_POST['email'])){
            $errors['email']['required'] ='Bắt buộc phải điền email' ;
    
        }else{
            // Hàm kiểm tra định dạng email
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $errors['email']['invaild'] = "Email không đúng định dạng";
            }
        }

        // if(empty($errors)){
        //     echo 'Validate thành công, không có lỗi';
        // }else{
        //     echo 'Có lỗi xảy ra';
        // }
        echo '<pre>';
        print_r($errors);
        echo "</pre>";
    }

?>


 <form method="POST" action="">
    <p>Họ tên:
    <input type="text" name="fullname" placeholder="Họ tên">
   <?php  echo !empty($errors['fullname']['required']) ?'<p style="color:red;">'.$errors['fullname']['required'].'</p>' : ''; ?>
    <?php echo !empty($errors['fullname']['min_length']) ?'<p style="color:red;">'.$errors['fullname']['min_length'].'</p>' : ''; ?>

    </p>
    <p>Email:
    <input type="text" name="email" placeholder="Email">
    <?php  echo !empty($errors['fullname']['required']) ?'<p style="color:red;">'.$errors['email']['required'].'</p>' : ''; ?>
    <?php echo !empty($errors['fullname']['min_length']) ?'<p style="color:red;">'.$errors['email']['invaild'].'</p>' : ''; ?>
    </p>
    <button type="submit">Xác nhận</button>
</form>