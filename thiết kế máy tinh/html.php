<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link type="text/css" rel="stylesheet" href="css.css">
    <title>Document</title>
    
</head>
<body>
    <?php
    $kq=0;
$so_a="";
$so_b="";
 
 
    if(isset($_POST['one'])){
        $kq=1;
    }
    if(isset($_POST['add'])){
        $kq="+";
    }
    if(isset($_POST['two'])){
        $kq=2;
    }
    if(isset($_POST['three'])){
        $kq=3;
    }
    if(isset($_POST['four'])){
        $kq=4;
    }
    if(isset($_POST['five'])){
        $kq=5;
    }
    if(isset($_POST['six'])){
        $kq=6;
    }
    if(isset($_POST['seven'])){
        $kq=7;
    }
    if(isset($_POST['eight'])){
        $kq=8;
    }
    if(isset($_POST['nine'])){
        $kq=9;
    }
  
    ?>
    <h2>Máy tính cơ bản</h2>
    <form method="post" action="">
        <input type="text" name="so_a" value="<?php echo $so_a?>">
        <input type="text" name="so_b" value="<?php echo $so_b?>"><br/>
<input type="text" name="kq" value="<?php echo $kq ?>" style="width: 300px; height:50px; font-size:50px"><br/><br/>
<nav id="number">
    <input type="submit" name="seven" value="7">
<input type="submit" name="eight" value="8">
<input type="submit" name="nine" value="9">
<input type="submit" name="delete" value="del">
<input type="reset" name="AC" value="AC"><br/><br/>


<input type="submit" name="four" value="4">
<input type="submit" name="five" value="5">
<input type="submit" name="six" value="6">
<input type="submit" name="multiply" value="x">
<input type="submit" name="divide" value="/">
<br/><br/>
<input type="submit" name="one" value="1">
<input type="submit" name="two" value="2">
<input type="submit" name="three" value="3">
<input type="submit" name="add" value="+">
<input type="submit" name="subtruct" value="-">
<br/><br/>


<input type="submit" name="rezo" value="0">

<input type="submit" name="dot" value=".">
<input type="submit" name="equal" value="="><br/><br/>
</nav>
    </form>
</body>
</html>