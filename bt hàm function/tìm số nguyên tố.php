<?php
//n là SNT khi  n lớn hơn 2 và n không chi hết cho (0;(n-1)) hay o chia hết cho các gtri nhỏ hơn n
function so_nguyen_to($n){
for($i=2;$i<$n;$i++){
   
    if($n%$i!=0){
       return true;
    }
    

}
return false;
}
$n=3;
if(so_nguyen_to($n)){
    echo $n." là số nguyên tố";
}
else{
    echo $n." không là số nguyên tố";
 
}
?>