<?php
 $conn=mysqli_connect('localhost','root','','tkb');
$sql="SELECT * from tuan_1";
$a=mysqli_query($conn,$sql);
if($row=mysqli_fetch_row($a)){
    mysqli_fetch_array($a);
    echo $row;
}
?>