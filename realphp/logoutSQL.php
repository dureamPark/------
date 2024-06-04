<?php
session_start();
session_destroy();
?>
<script>
    alert("로그아웃했습니다. 다음에 또 이용해주세요!");
    location.replace('loginPage.php');
</script>