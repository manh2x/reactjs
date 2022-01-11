<?php
// echo'<pre>';
// print_r( $_GET);
// nếu tồn tại 1 biến với name là doit thì echo ra
if(isset($_GET['doit'])){
    echo $_GET['name'];
}
if(isset($_POST['submit'])){
    $a=$_POST['name'];
    $b=$_POST['pass'];
    echo "User_name Nhập là :".$a."<br/>";
    echo "password Nhập là :".$b."<br/>";
}
?>
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
$id=$_GET["id"];
$b=$_GET["name"];
$c=$_GET["district"];
$d=$_GET["city"];
$e=$_GET["country"];

?>
id:<input type="text" name="id" value="<?php echo $id; ?>">  <br/><br/>
name:<input type="text" name="name" value="<?php echo ucfirst($b); ?>">  <br/><br/>
district:<input type="text" name="dis" value="<?php echo ucfirst($c); ?>">  <br/><br/>
city:<input type="text" name="ci" value="<?php echo ucfirst($d); ?>">  <br/><br/>
country:<input type="text" name="coun" value="<?php echo ucfirst($e); ?>">  <br/><br/>

</body>
</html>
