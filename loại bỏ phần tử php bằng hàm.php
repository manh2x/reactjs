<?php
$a=array(10,20,30,40,50);
function remove(&$a,$loai="one",$sum=3){
$total=array();
if(!empty($a)){
    if($loai=="one"){
        for($i=1;$i<=$sum;$i++){
            $total[]=array_shift($a);
        }
    }
   else if($loai=="two"){
        for($i=1;$i<=$sum;$i++){
            $total[]=array_pop($a);
        }
    }
}
return $total;
}
echo "mảng sđàu<br/><pre>";
print_r($a);
echo"</pre>";
$remo=remove($a,"two",3);
echo"mảng bị xóa<br/>"."<pre>";
print_r($remo);
echo "</pre>";
echo "mảng sau khi xóa<br/><pre>";
print_r($a);
echo"</pre>";
