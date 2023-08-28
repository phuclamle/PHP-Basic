<?Php 

/*



*/

require_once "./connect.php";
$sql = "INSERT INTO hocsinh(fullname,age) VALUES(:fullname,:age)";

try{
    // Hàm prepare giúp bảo mật thông tin

$statement = $conn -> prepare($sql);

$fullname = 'Minh';
$age = '40';
// // Hàm bindParam để gán giá trị cho placehoder

// $statement -> bindParam(':fullname',$fullname);
// $statement -> bindParam(':age',$age);

// Cách 2
$data = [
    'fullname' =>  $fullname,
    'age' => $age
];

// Hàm excute để chạy câu lệnh sql
$insertStatus= $statement -> execute($data);

var_dump($insertStatus);
}catch (Exception $exp){
    echo $exp -> getMessage()."</br>";
    echo "FIle:".$exp -> getFile()."</br>";
    echo "Line:".$exp -> getLine();
}
