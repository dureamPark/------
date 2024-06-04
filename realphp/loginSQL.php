<?php
session_start();

include "SQLconstants_d.php";

$uid=$_POST['uname'];
$pass=$_POST['password'];

//echo $uid;
//echo $pass;


$result = mysqli_query($conn, "SELECT * FROM user_id where id='$uid' AND pwd='$pass';");
if($row = mysqli_fetch_array($result)){

?>

        <script>
		alert("로그인 성공! 환영합니다!");
		location.replace('mainUSER.php');
	</script>
<?php
        // header("Location: mainUSER.php");
        // exit();
        //echo "id:".$row['id']." <BR> password:".$row['pwd'];
}else{

        ?>

        <script>
		alert("로그인에 실패했습니다. 아이디와 비밀번호를 확인해주세요!");
		location.replace('loginPage.php');
	</script>
<?php
        // header("Location: loginPage.php?error=아이디 또는 비밀번호가 틀렸습니다.");
        // exit();
}
?>