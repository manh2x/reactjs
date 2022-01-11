<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
$a="";
$b="";
$c="";
$sum="";
if(isset($_POST["txtsoa"])&&isset($_POST["txtpheptinh"])&&isset($_POST["txtsob"])){
$a=$_POST["txtsoa"];
$b=$_POST["txtpheptinh"];
$c=$_POST["txtsob"];
if(is_numeric($a)&&is_numeric($c)){
switch($b){
case "+":
    $sum=$a+$c;
    break;
case "-":
    $sum=$a-$c;
    break;
    case "*":
        $sum=$a*$c;
        break;
    case "/":
        $sum=$a/$c;
        break;
}
}
else{
    $sum="nhập giá trị số";
}
}
?>
<h1>Mô phỏng máy tính điện tử</h1><br/><br/>
<form method="post" action="">
Nhập Số a: <input type="text" name="txtsoa" value="<?php echo $a ?>"><br/><br/>
Phép Tính: <input type="text" name="txtpheptinh" value="<?php echo $b ?>"><br/><br/>
Nhập Số b: <input type="text" name="txtsob" value="<?php echo $c ?>"><br/><br/>
Kết Quả :  <input type="text" name="txtkq" value="
<?php if(is_numeric($a)&&is_numeric($c)){
    echo $a." ".$b." ".$c." = ".$sum ;
 }
 else{
     echo $sum;
 }
  ?>"><br/><br/>
<button type="submit">Kết Quả</button><br/><br/>
</form>

</body>
</html>