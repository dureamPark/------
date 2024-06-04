<?php 

	$mySQL_id = "gyeori0805"; 	

	// MySQL Password	
	$mySQL_password = "Akehcmzl0805";

	// MySQL Server 
	$mySQL_host = "localhost";

	// MySQL Database
	$mySQL_database = "School";
	// MySQL ID : MySQL 설치시 아이디 ex) root, test, ...
	// $mySQL_id = "duream"; 	

	// // MySQL Password	
	// $mySQL_password = "Sk10091004!";

	// // MySQL Server 
	// $mySQL_host = "localhost"; //"http://18.222.49.217:3306/";

	// // MySQL Database
	// $mySQL_database = "University"; 
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

?>
