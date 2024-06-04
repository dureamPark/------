<?php
session_start();

include "SQLconstants_d.php";

$uid=$_POST['uname'];
$pass=$_POST['password'];

//echo $uid;
//echo $pass;


$result = mysqli_query($conn, "SELECT * FROM user_id where id='$uid' AND pwd='$pass';");
if($row = mysqli_fetch_array($result)){

        header("Location: mainUSER.php");
        exit();
        //echo "id:".$row['id']." <BR> password:".$row['pwd'];
}else{

        header("Location: loginPage.php?error=아이디 또는 비밀번호가 틀렸습니다.");
        exit();
}
?>