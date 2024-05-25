<?php 

include("./SQLconstants.php");
	
$uid=$_POST['uname'];
$pwd=$_POST['password'];

echo "$uid / $pwd";

// $uid=mysqli_real_escape_string($conn, $uid);
// $pwd=mysqli_real_escape_string($conn, $pwd);

// $sql="select * from user_id where id"

?>