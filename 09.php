
<?php
$nunber=11;
function kientra($nunber){
    if($nunber%2==0){
        echo $nunber." là số chẵn";
    }
    else{
        echo $nunber." là số lẻ";
    }
}
echo kientra($nunber)."<br/>";
$a=1;
$b=2;
function tong($a,$b){
    return $a+$b;
}
echo tong($a,$b)."<br/>";
$i=1;
function tinh($i){
   
    return $i=$i+1;
}
echo tinh($i);
?>