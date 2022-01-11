<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name="";
    $in=""; 
    if(isset($_POST["txtchuoi"])){
$name=$_POST["txtchuoi"];
for($i=0;$i<strlen($name);$i++){
 echo "$name[$i]<br/>";
}
    }
    ?>
    <form method="post" action="">
      Nhập chuỗi:  <input type="text" name="txtchuoi" value="<?php echo $name ?>"><br/><br/>
        <button type="submit">In ý tự</button>
    </form>
    
</body>
</html>