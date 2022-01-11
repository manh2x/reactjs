<?php
$a= $_POST["sdt"]."<br/>";
$b= $_POST["pass"];
if($a =="396" && $b == "12345"){
    echo "đăng nhập thành công";
}
else{
    echo "thất bại";
}


?>