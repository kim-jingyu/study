<?php
    $userId = $_POST['userId'];
    $password = $_POST['password'];

    session_start();
    setcookie("loginUser", $userId, time() + 3600, "/");

    if ($userId == 'admin' && $password == 'qkqh') {
        header("Location: index.php");
    } else {
        $_SESSION['loginFail'] = 'loginFail';
        echo "<script>location.href='/getAdminCookie/login.php'</script>"
    }
?>