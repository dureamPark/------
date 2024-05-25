<?php 
session_start(); 
include " SQLconstants.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        

		$sql = "SELECT * FROM user_id WHERE id='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['id'] === $uname && $row['password'] === $pass) {
            	$_SESSION['id'] = $row['id'];
            	header("Location: main(afterLogin).php");
		        exit();
            }else{
				header("Location: login.php?error=계정명 또는 암호가 틀렸다");
		        exit();
			}
		}else{
			header("Location: login.php?error= 계정명 또는 암호가 틀렸다");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}
?>