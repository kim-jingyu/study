<?php
    $userId = $_POST['userId'];
    $password = $_POST['password'];

    setcookie("loginUser", $userId, time() + 3600, "/");

    if ($userId == 'admin' && $password == 'qkqh') {
        header("Location: index.php");
    }
?>