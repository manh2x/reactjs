<?php

//n là SNT khi  n lớn hơn 2 và n không chi hết cho (0;(n-1)) hay o chia hết cho các gtri nhỏ hơn n
$n=8;
for($i=1;$i<$n;$i++){
    if($n%$i!=0){
       $result=true;
    }
    $result=false;
}
if($result==true){
    echo $n." là số nguyên tố";
}
else{
    echo $n." không là số nguyên tố";
 
}
?>