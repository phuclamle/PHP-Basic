<?php 
/*
$day =2;
-nếu $day = 2 --> in ra là "HÔM NAY LÀ THỨ HAI"
nếu $day = 3 --> in ra là "HÔM NAY LÀ THỨ HAI"
nếu $day = 4 --> in ra là "HÔM NAY LÀ THỨ HAI"
nếu $day = 5 --> in ra là "HÔM NAY LÀ THỨ HAI"
nếu $day = 6 --> in ra là "HÔM NAY LÀ THỨ HAI"
nếu $day = 7 --> in ra là "HÔM NAY LÀ THỨ HAI"
nếu $day = 8 --> in ra là "HÔM NAY LÀ THỨ HAI"
*/

$day =100;
switch($day){
    case 2:
        echo "Hôm nay là thứ 2";
        break;
    case 3:
        echo "Hôm nay là thứ 3";
        break;
    case 4:
        echo "Hôm nay là thứ 4";
        break;
    case 5:
        echo "Hôm nay là thứ 5";
        break;
    case 6:
        echo "Hôm nay là thứ 6";
            break;
    case 7:
        echo "Hôm nay là thứ 7";
            break;
    default:
        echo "Hôm nay là chủ nhật";
        
}
?>