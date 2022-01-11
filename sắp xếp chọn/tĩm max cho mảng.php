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
function tim_max($mang){
    $max=0;
    for($i=0;$i<count($mang);$i++){
        if($mang[$i]>$mang[$max]){
            $max=$i;
        }
    }
    return "Giá trị max= ".$mang[$max]." ở vị trí ".$max;
}
 $result= tim_max($mang);

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