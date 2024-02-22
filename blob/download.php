<?php
    $dbName = getenv("DB_NAME");
    $dbHost = getenv("DB_HOST");
    $dbUsername = getenv("DB_USERNAME");
    $dbPassword = getenv("DB_PASSWORD");
    
    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    if ($conn->errno) {
        die("DB Down");
    }

    $id = $_GET['id'];

    $sql = "SELECT data FROM image_test WHERE id=$id";
    $result = $conn->query($sql);
    $row = mysqli_fetch_object($result);
    
    $name = $row['name'];
    $len = strlen($row['data']);
    $type = $row['type'];
    header("content-type: ".$type);
    header("content-length: ".$len);
    header("content-disposition: attachment; filename=".$name);
    header("content-transfer-encoding: binary");
    echo $row->data;
?>