<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
Nhập điểm toán: 
<input type="text" name="txttoan"><br/><br/>
Nhập điểm văn: 
<input type="text" name="txtvan"><br/><br/>
Nhập điểm Anh: 
<input type="text" name="txtanh"><br/><br/>
<button type="submit">kết quả</button>

    </form>
    <?php
    $a=(int)$_POST['txttoan'];
    $b=(int)$_POST['txtvan'];
    $c=(int)$_POST['txtanh'];
    
    if($a<0 || $a>10 ){
        echo "nhập điểm môn toán Từ  0 -> 10 ";
    }
    else if($b<0 || $b>10 ){
        echo "nhập điểm môn Văn Từ  0 -> 10 ";
    }
    else if($c<0 || $c>10 ){
        echo "nhập điểm môn Anh Từ  0 -> 10 ";
    }
    else if($a=="" || $b=="" ||$c==""){
        echo "bạn bị loại do không đủ điểm";
    }
    else if((($a+$b+$c)/3)>=5){
        echo "Bạn đã đỗ tốt nghiệp <br/>";
       if((($a+$b+$c)/3)>=5 && (($a+$b+$c)/3)<=7) {
           echo "xếp học lực TB";
       }
      else if((($a+$b+$c)/3)>7 && (($a+$b+$c)/3)<=8) {
        echo "xếp học lực Khá";
    }
    else if((($a+$b+$c)/3)>8 && (($a+$b+$c)/3)<=10) {
        echo "xếp học lực Giỏi";
    }
    }
    else if((($a+$b+$c)/3)<5){
        echo " bạn không đủ điểm tốt nghiệp";
        echo "học lực yếu";
    }
    else{
        echo "bạn bị loại do không đủ điểm";
    }
    ?>
</body>
</html>