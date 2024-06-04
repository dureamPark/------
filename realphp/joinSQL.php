<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$user_id = $_POST['userid'];
	$user_pass = $_POST['userpass'];
    $user_passcheck=$_POST['passcheck'];
	
	$message = "";

	// MySQL 드라이버 연결 
	include("SQLconstants_d.php");
	

	// MySQL  추가 실행 	
	

    if($user_pass != $user_passcheck){
        $result=false;
    }else{
        $query = "INSERT INTO user_id( id, pwd ) VALUES ( '".$user_id."', '".$user_pass."');"; 
	    $result = mysqli_query( $conn, $query );
    }


	if( $result ) 
	{	
		$message = "(".$user_id.") 을 회원으로 추가하였습니다."; 

		?>

		<script>
			alert("회원가입이 완료되었습니다. 로그인을 시도해주세요!");
			location.replace('loginPage.php');
		</script>

		<?php

        // header("Location: loginPage.php");
        // exit();
	} 
	else 
	{
		$message = "회원 명단에 추가할 수 없습니다."; 


		?>
		<script>
			alert("회원가입을 실패했습니다. 다시 시도해주세요!");
			location.replace('join.php');
		</script>

<?php
        // header("Location: join.php?error=비밀번호 확인 실패.");
        // exit();
	} 
?>

