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
    $n=0;
for($i=1;$i<=100;$i++){
    if($n<=3){
    if($i%9==0){
        echo $i."-<br/>";
        $i++;//tăng đến 100
        $n++;//$n tăng dần lên 4;
    }
}
else{
    break;
}
}
for($j=1;$j<=10;$j++){
    if($j==3||$j==8) //bỏ qua 3 và 8 để chạy tiếp:124567910
        continue;
        echo $j."-";
    
}
    ?>
</body>
</html>