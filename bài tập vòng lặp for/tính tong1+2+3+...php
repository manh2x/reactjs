<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color: red;">Tính tổng S cho các biểu thức </h1>
<form method="post" action="">
    <?php
    $so="";
    $in="";
    $in1="";
    if(isset($_POST["txtso"])){
        $so=$_POST["txtso"];
        $tong=0;
        $sum=0;
        for($i=1;$i<=$so;$i++){
            $tong+=$i;
            $sum+=2*$i-1;
        }
        $in=$tong;
        $in1=$sum;
    }
    ?>
Nhập số n : <input type="text" name="txtso" value="<?php echo $so; ?>"><br/><br/>
in 1+2+3+...+n  : <input type="text" name="txtin" value="<?php echo $in; ?>"><br/><br/>
in 1+3+5+7+...+2n-1: <input type="text" name="txtin" value="<?php echo $in1; ?>"><br/><br/>

<button type="submit">Kiểm Tra Số </button><br/><br/>
    </form>   
</body>
</html>