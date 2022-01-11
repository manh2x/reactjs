<?php
$array=[5,2,65,1,93];
$max="";
for($i=0;$i<count($array);$i++){
    if($max==""){
        $max=$array[$i];
        $stt=$i;
    }
    else{
        if($array[$i]>$max){
            $max=$array[$i];
            $stt=$i;
        }
    }
   
}
 echo "số lớn nhất là ".$max." đứng thứ ".$stt." trong mảng";
?>