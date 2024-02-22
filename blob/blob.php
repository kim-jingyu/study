<?php
    $dbName = getenv("DB_NAME");
    $dbHost = getenv("DB_HOST");
    $dbUsername = getenv("DB_USERNAME");
    $dbPassword = getenv("DB_PASSWORD");
    
    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    if ($conn->errno) {
        die("DB Down");
    }

    $file = $_FILES['imageFile'];
    if (!$file) {
        die("파일없음");
    }

    $name = $file['name'];
    $data = $file['tmp_name'];
    $type = $file['type'];

    $sql = "INSERT INTO images('name', 'data', 'type') VALUES($name, $data, $type)";
    $res = $conn->query($sql);
    if(!$res) {
        die("파일 저장 실패");
    }
?>