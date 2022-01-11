<?php
$a=array("name"=>"mạnh",
"tuoi"=>20);
$b=array_flip($a);
echo "mảng sđàu<br/><pre>";
print_r($b);
echo"</pre>";
$d=array(2,3,5,1,7,9);
$e=max($d);
echo $e;
$f=array_rand($b,1);
echo "mảng sđàu<br/><pre>";
print_r($f);
echo"</pre>";