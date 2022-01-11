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
$result="";
if(isset($_POST['tim'])){
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$mang=array($a,$b,$c,$d);
function SX_max($mang){
    
    for($i=0;$i<count($mang);$i++){
$max=$i;
        for($j=$i+1;$j<count($mang);$j++){
            // điều kiện để sắp xếp tăng dần
        if($mang[$j]>$mang[$max]){
            $max=$j;
        }
        
    }
      $temp=$mang[$i];
    $mang[$i]=$mang[$max];
    $mang[$max]=$temp;
    }
  foreach($mang as $value ){
 echo $value."-";
}

 

}
 SX_max($mang);

}
    ?>
<form method="post" action="">
        mảng: <input type="text" name="a"><input type="text" name="b"><input type="text" name="c"><input type="text" name="d">
        <br/><br/>
      max:<input type="text" name="max"  value=" <?php echo $result; ?>"><br/><br/>
      
<input type="submit" name="tim" value="Tìm">
    </form>
</body>
</html>