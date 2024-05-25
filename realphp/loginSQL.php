<?php 
session_start();

include("./ SQLconstants.php");

$isLogin=$_SESSION['$isLogin'];





$uid=$_POST['uname'];
$pwd=$_POST['password'];

echo "$uid / $pwd";

$uid=mysqli_real_escape_string($conn, $uid);
$pwd=mysqli_real_escape_string($conn, $pwd);

$sql="select * from user_id where id='$uid' and password=password('$pwd')";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($result);

if($data){
    $_SESSION['$isLogin']=time();
}
else{
    
}

?>