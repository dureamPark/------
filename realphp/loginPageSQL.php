<?php 
session_start(); 
include " SQLconstants.php"; // 데이터베이스 연결 설정 파일

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data) {
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
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        // 해싱된 비밀번호를 사용 (MD5)
        $pass = md5($pass);

        // SQL 쿼리
        $sql = "SELECT * FROM user_id WHERE id='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        // 결과 확인
        if ($result) {
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                // 사용자명과 비밀번호가 일치하는지 확인
                if ($row['id'] === $uname && $row['password'] === $pass) {
                    $_SESSION['uname'] = $row['id'];
                    header("Location: mainUSER.php");
                    exit();
                } else {
                    header("Location: loginPage.php?error=계정명 또는 암호가 틀렸다");
                    exit();
                }
            } else {
                header("Location: loginPage.php?error=계정명 또는 암호가 틀렸다");
                exit();
            }
        } else {
            // 쿼리 실행 오류
            header("Location: loginPage.php?error=데이터베이스 오류 발생");
            exit();
        }
    }

} else {
    header("Location: loginPage.php");
    exit();
}
?>
