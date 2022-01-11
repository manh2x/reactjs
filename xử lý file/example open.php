<?php
$path="../loc.txt";
$a=@fopen($path,"r");
if(!$a){
    echo"không tồn tại file";
}
else{
    echo "mở file thành công";
}