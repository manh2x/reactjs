<?php
$name=$_POST['names'];
 $username=$_POST['username'];
  $password=$_POST['password'];
$conn = mysqli_connect('localhost', 'root', '','mysql01');
 
// Kiểm tra kết nối thành công hay thất bại
// nếu thất bại thì thông báo lỗi

 
// $sql="SELECT * FROM thanhvien where taikhoan='$username'";
// $result=$conn->query($sql)->fetch_assoc();
// if($result['matkhau']==$password){
//    header('Location:http://locallhost:8080/php/01.php');
// }
// else{
//     echo "thất bại";
// }

// $conn->close();
$sql = " SELECT * FROM thanhvien where taikhoan='$username' and matkhau='$password'";
 
// Thực hiện thêm record
$total=$conn ->query($sql)->fetch_assoc();
if($total==true){
  echo "đăng nhập thành công";
  

}
else{
  echo"thất bại";
}
 
// Ngắt kết nối
mysqli_close($conn);

?>