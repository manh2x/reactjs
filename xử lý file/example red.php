
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

$path="./upload file/file upload.php";
$a=@fopen($path,"r");
if(isset($_POST['readfile'])){
if(!$a){
    
}
else{ 
    $b= fread($a,filesize($path));
    if(isset($_POST['an'])){
    
       $c=unlink($path);
      echo $c;
}
else{
   
    echo$b;}
}
}

  ?>
<form method="post" action="" enctype="multipart/form-data">
       
        <input type="submit" name="readfile" value="read"/>
        <input type="reset" name="an" value="Ẩn"/>
    </form>
</body>
</html>
<?php
//     while(!feof($a)){
//         echo fgets($a);
//     }
// }
// $fp = @fopen($path, "a+");
  
// // Kiểm tra file mở thành công không
// if (!$fp) {
//     echo 'Mở file không thành công';
// }
// else
// {
//     // Lặp qua từng dòng để đọc
//     // while(fgets($fp)!="")
//     // {
//     //     echo fgetc($fp)."<br/>";
//     // }
//     $b="nội dung data mới";
//   fwrite($fp,$b);
//     $c=fread($fp,filesize($path));
// echo $c;
// }