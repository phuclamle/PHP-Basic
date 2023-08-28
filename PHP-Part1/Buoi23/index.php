<?php 
 /*
    Nếu $a<0 -> in ra "Biến A âm" ngược lại in ra "Biến A dương"

 */

//  if($a<0){
//     echo "Biến A âm";
//  }else{
//     echo "Biến A dương";
//  }


//Toán tử 3 ngôi

$a = 5;
// echo($a <0) ? "Biến A âm":"Biến A dương";

 if($a<0){
    ?>
    <ul>
        <li>item1</li>
        <li>item2</li>
        <li>item3</li>
        <li>item4</li>
    </ul>
<?php
 }else{
    echo "Biến A dương";
 }

 echo "</br>";

//  cú pháp thay thế của php
 if($a<0):
    ?>
    <ul>
        <li>item1</li>
        <li>item2</li>
        <li>item3</li>
        <li>item4</li>
    </ul>
<?php
 else:
    echo "Biến A dương";
endif;
 
