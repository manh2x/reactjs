<?php
$mang=array(5,8,9,1,3,10);
function SX_max($mang){
    
    for($i=0;$i<count($mang);$i++){
$max=$i;
        for($j=$i+1;$j<count($mang);$j++){
        if($mang[$j]>$mang[$max]){
            $max=$j;
        }
    }
    $temp=$mang[$i];
    $mang[$i]=$mang[$max];
    $mang[$max]=$temp;
    }
    return  $mang;
}
print_r(SX_max($mang));
