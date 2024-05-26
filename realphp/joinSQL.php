<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$user_id = $_POST['userid'];
	$user_pass = $_POST['userpass'];
	
	$message = "";

	// MySQL 드라이버 연결 
	include("SQLconstants.php");
	

	// MySQL  추가 실행 	
	$query = "INSERT INTO user_id( id, pwd ) VALUES ( '".$user_id."', '".$user_pass."');"; 
	$result = mysqli_query( $conn, $query );
	if( !$result ) 
	{	
		$message = "(".$user_id.") 을 회원으로 추가하였습니다."; 
        header("Location: loginPage.php");
        exit();
	} 
	else 
	{
		$message = "회원 명단에 추가할 수 없습니다."; 
	} 
?>

<!-- ?php 
	 //로그 데이터 추출
	include("./log.php");
	writeLog( $message );
?>

다음 페이지로 메시지 전달 
<form name = "frm" method = "post" action = "./searchSTD.php" >
	<input type = 'hidden' name = 'message' value = ' * ?php echo $message;?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script> -->