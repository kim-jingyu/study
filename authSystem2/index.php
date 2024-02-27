<?php
    session_start();

    $userLevel = $_SESSION['userId'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth System</title>
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">메뉴</h3>
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">About</a></li>
                    <li role="presentation"><a href="#" onclick="goMenu('1129', '')">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="jumbotron">
            <h1>핵미사일 시스템</h1>
            <p class="lead">DANGER</p>
            <p>발사 버튼은 관리자만 이용 가능합니다.</p>
        </div>
        <p>
            <a class="btn btn-lg btn-danger" href="#" role="button" onclick="goMenu('1018', '<?php echo $userLevel ?>')">Fire</a>
        </p>
        <div class="row marketing"></div>
        <footer class="footer">
            <p>&copy; Jingyu</p>
        </footer>
    </div>
    <script src="./js/user.js"></script>
</body>

</html>