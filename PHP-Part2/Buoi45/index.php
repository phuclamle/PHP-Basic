<?php 
// Client gửi lên: Phương thức GET là phương thức gửi dữ liệu thông qua 
// đường dẫn URL nằm trên thanh địa chỉ Brower. Server sẽ nhận đường dẫn đó và
// phân tích kết quả cho bạn

// Server nhận dữ liệu: Tất cả dữ liệu mà Client gửi lên bằng
// phương thưc GET đều được lưu trong một biến toàn cục mà PHP tự tạo ra đó là $_GET, biến 
// này là kiểu mảng kết hợp lưu trữ danh sách dữ liệu từ client gửi lên theo quy luật key => value

if(isset($_GET['action'])){
    echo $_GET['action'];
}else{
    echo "Giá trị không tồn tại";
};
// => Mọi dữ liệu đều được gửi qua đường link URL