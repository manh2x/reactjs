<?php

function giai_thua($n){
     $sum=1;
  for($i=1;$i<=$n;$i++){
      $sum*=$i;
   
}  
return $sum;
}
echo giai_thua(5);
?>