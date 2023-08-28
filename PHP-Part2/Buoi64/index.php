<?php 
require_once "./connect.php";

$sql = "DELETE FROM hocsinh WHERE id = :id";


$id = 6;

try{
    $statement = $conn -> prepare($sql);
    $statement ->bindParam(":id",$id);
    // $data = [$id];

    $deleteStatus=$statement -> execute();
    var_dump($deleteStatus);

}catch(Exception $exp){
    echo '<div style = "color:red;padding: 5px 15px; border: 1px solid black;">';
    echo $exception ->getMessage()."</br>";
    echo '</div>';
    die();
}
