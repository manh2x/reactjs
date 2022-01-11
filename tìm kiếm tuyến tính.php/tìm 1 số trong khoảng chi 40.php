<?php
$mang=array();
for($i=1;$i<=100;$i++){
$mang[$i]=$i;
}
function kiem_tra($mang){
    foreach($mang as $key => $value){
    if($value%40==0){
        echo $value." ở vị trí ".$key."<br/>";
    }
}
}
echo kiem_tra($mang)
?>