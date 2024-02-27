<?php
    $userId = $_GET['userId'];
    $password = $_GET['password'];

    session_start();
    $_SESSION['userId'] = $userId;

    header('Content-Type: application/json; charset=UTF-8');

    if ($userId == 'admin' && $password == 'qkqh') {
        echo json_encode("ok");
    } else {
        echo json_encode("fail");
    }
?>