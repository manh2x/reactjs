<?php 
$a=array(1,2,3);
$b=array(2,3,4);
function my($a,$b){
    $c=$a+$b;
    return $c;
}
$d=array_map("my",$a,$b);
echo"<pre>";
print_r($d);
echo"</pre>";