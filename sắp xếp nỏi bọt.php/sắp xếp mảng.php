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
$ressult="";

if(isset($_POST['tim'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $e=$_POST['e'];
    $mang=array($a,$b,$c,$d,$e);
   
    for($i=0;$i<count($mang);$i++){
      
        for($j=$i+1;$j<count($mang);$j++){
           IF( $mang[$i]>$mang[$j]){
               $hoandoi=$mang[$i];
               $mang[$i]=$mang[$j];
               $mang[$j]=$hoandoi;


            }
        }    echo $mang[$i]."-";
       
    
}

}
    ?>
<form method="post" action="">
        mảng: <input type="text" name="a"><input type="text" name="b"><input type="text" name="c"><input type="text" name="d">
        <input type="text" name="e"><br/><br/>
       <?php echo $ressult; ?><br/><br/>
<input type="submit" name="tim" value="Tìm">
    </form>
</body>
</html>