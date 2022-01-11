<?php
// hàm dùng for
// function tim($a,$value){
    
//     for($i=0;$i<count($a);$i++){
//         if($a[$i]==$value){
//            return true;
// break;

//         }
        
//     }
//    return false;
//     }


// $a=array(3,5,12,9,8,36,120);

// $value=120;
// if(tim($a,$value)){
//     echo $value." có trong mảng";
// }
// else{
//     echo $value." khong có trong mảng";
// }
$a=array(1,5,6,8,9,11);
function tim($a,$value){
    foreach($a as $valu){
        if($valu==$value){
            return true;
            break;
        }
    }
    return false;
}
$value=11;
if(tim($a,$value)){
    echo $value." có trong mảng";
}
else{
    echo $value." không trong mảng";
}