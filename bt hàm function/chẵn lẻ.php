<?php
function chan_le($a){
    if($a%2==0){
        return true;
    }
    return false;
}
$a=15;
if(!chan_le($a)){
    echo $a." là số lẻ";
}
?>