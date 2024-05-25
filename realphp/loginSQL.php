<?php 
session_start([
    'cookie_lifetime' => 86400,
    'cookie_httponly' => true,
    'use_strict_mode' => true
]);
include("./SQLconstants.php");

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data) {
        return htmlspecialchars(stripslashes(trim($data)));
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
        $stmt = $conn->prepare("SELECT * FROM user_id WHERE id=?");
        if ($stmt === false) {
            error_log("Prepare failed: (" . $conn->errno . ") " . $conn->error);
            die("Database error. Please try again later.");
        }
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if (password_verify($pass, $row['password'])) {
                $_SESSION['user_name'] = $row['id'];
                header("Location: main(afterLogin).php");
                exit();
            } else {
                header("Location: login.php?error=Invalid credentials");
                exit();
            }
        } else {
            header("Location: login.php?error=Invalid credentials");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>
