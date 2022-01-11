<?php
$path="../loc.txt";

if(file_exists($path)==true){
    $fp=@fopen($path,"r");
    echo $a=file_get_contents($path)."<br/>";
    $a=fileatime($path);
    echo "thời gian cuối là ".date("d m y H:m:s.", $a)."<br/>";
 $b=fread($fp,filesize($path));
if($b==true){
    echo "thành công<br/>";echo file_get_contents($path);
}
else{
    echo"thất bại<br/>";
}

}