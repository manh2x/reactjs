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
$kq=""
;if(isset($_POST['tim'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
   
    function  tim_max($a,$b,$c,$d){
        $max=$a;
        if($max < $b){
             $max=$b;
        }
        if($max < $c){
            $max=$c;
       }
    
       if($max < $d){
        $max=$d;
   }
   return $max;
  
    }
    $result=tim_max($a, $b, $c,$d);
    
    function  tim_min($a,$b,$c,$d){
        $min=$a;
        if($min > $b){
             $min=$b;
        }
        if($min > $c){
            $min=$c;
       }
       if($min > $d){
        $min=$d;
   }
   return $min;
  
    }$kq=tim_min($a, $b, $c,$d);


}
    ?>
<form method="post" action="">
        mảng: <input type="text" name="a"><input type="text" name="b"><input type="text" name="c"><input type="text" name="d">
        <br/><br/>
      max:<input type="text" name="max"  value=" <?php echo $result; ?>"><br/><br/>
      min:<input type="text" name="min"  value=" <?php echo $kq; ?>"><br/><br/>
<input type="submit" name="tim" value="Tìm">
    </form>  
</body>
</html>