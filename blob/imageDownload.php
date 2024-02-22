<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Download</title>
</head>
<body>
    <?php
         $dbName = getenv("DB_NAME");
         $dbHost = getenv("DB_HOST");
         $dbUsername = getenv("DB_USERNAME");
         $dbPassword = getenv("DB_PASSWORD");
         
         $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
         if ($conn->errno) {
             die("DB Down");
         }

         $sql = "SELECT * FROM image_test";
         $result = $conn->query($sql);

         if (!mysqli_num_rows($result)) {
            die("데이터 없음");
         }

         while($row = mysqli_fetch_object($result)) {
            echo "이미지 다운링크 : <a href='./download.php?id=$row->id'>$row->name</a>";
         }
    ?>
</body>
</html>