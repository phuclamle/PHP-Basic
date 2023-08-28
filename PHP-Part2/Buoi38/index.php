<?php 
$arr = array(
    ['soMot',
     'soHai',
     'soBa'
],
            'JS',
            'PHP');

// thêm key vào trước mảng
$arr2 = [
    'key1'=>[
    'name' => [
        'Ho' => 'Pham',
        'Ten' => 'Hung'
    ],
    'email' => 'hungngoc2103@gmail.com'
],
    'key2'=>[
    'name' => 'Hong',
    'email' => 'hongngoc2103@gmail.com'
],
    'key3'=>[
    'name' => 'Lam',
    'email' => 'phuclam2103@gmail.com'
]
          
    ];
    if(!empty($arr2)){
        foreach($arr2 as $item){
            if(is_array($item)){
                if(!empty($item)){
                    foreach($item as $subArr){
                        if(is_array($subArr)){
                            if(!empty($subArr)){
                                foreach($subArr as $subArr2){
                                    echo $subArr2."</br>";
                                }
                            }
                        }
                        else{
                            echo $subArr."</br>";
                        }
                    }
                } 
                }
                else{
                    echo $item."</br>";
                }
            }
        }
    


    // truy xuất mảng bằng tên trực tiếp

    // echo $arr2['key1']['name']['Ho']."</br>";

    // $arr2['key1']['name']['Ten']='Ngoc';
    // echo $arr2['key1']['name']['Ten']."</br>";


    // dùng for 
    $arr = array(
        [
        'soMot',
         'soHai',
         'soBa'
    ],
                'JS',
                'PHP');

    
    // if(!empty($arr)){
    //     // count để đếm số phần tử trong mảng
    //     for($i=0; $i<count($arr);$i++){
    //         if(is_array($arr[$i])){
    //             if(!empty($arr[$i])){
    //                 for($j =0; $j<count($arr[$i]);$j++){
    //                     echo $arr[$i][$j]."</br>";
    //                 }
    //             }
    //         }
    //         else{
    //         echo $arr[$i]."</br>";
    //         }
    //     }
    // }  
    
    echo '<pre>';
    print_r($arr);
    
