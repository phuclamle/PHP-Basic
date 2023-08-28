<?php 
// CLASS có sẵn trong PHP : time() date()

// Tạo class
 class Hienu {
    // public: từ khóa công khai(ai cũng có quyền truy cập)
    public function tinhtong($a,$b){
        $tong = $a+ $b;
        echo $tong;
    }

    public function show(){
        echo 'Đây là hàm trong class';
    }
 }

 $bien1 = new Hienu;

//  gọi đến function có trong class
 $bien1 ->  show();

 echo "</br>";
 $a = 10;
 $b = 5;

 $bien1-> tinhtong($a,$b);