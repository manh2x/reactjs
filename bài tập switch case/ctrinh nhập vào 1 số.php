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
$number ="";
    $a="";
    if(isset($_POST['number'])){
        $a=$_POST['kq'];
    $number=$_POST['number'];
    switch($number){
        case 1:  $a=" số một"; break;
        case 2: $a="so hai"; break;
        case 3:  $a=" số ba"; break;
        case 4: $a="so bon"; break;
        default: $a="soos khac" ; break;
    }
}
?>
<form method="post" action=""> <div align ="center" >
        <h1> In ra chữ số</h1>
        Nhập số: <input type="text" name="number" ><br/><br/>
        kết quả: <input type="text" name="kq" value="<?php echo $a ?>"><br/><br/>
      <button type="submit"> submit</button>
    </div></form>
</body>
</html>