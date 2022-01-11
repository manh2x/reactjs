<?php
$a=array(10,80,30);
if(in_array(50,$a)){
    echo "True";
}
else{
    echo"False";
}
echo $b=implode("--",$a);
function my(&$va,$key){
    $va=$va*2;;
}
array_walk($a,"my");
echo"<pre>";
print_r($a);
echo"</pre>";