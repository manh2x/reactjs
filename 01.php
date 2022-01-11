<?php 
$array=array(8,1,9,2,0,4);
function mcv($a,$b){
if($a==$b){
    return true;
}
if($a>$b){
    return true;
}
else{
    return false;
}
}
$k=usort($array,"mcv");
foreach($array as $key => $val){
    echo $key."   ".$val."<br/>";
}
