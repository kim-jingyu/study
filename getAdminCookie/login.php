<?php
    $userId = $_POST['userId'];
    $password = $_POST['password'];
    $fail = false;

    session_start();
    setcookie("loginUser", $userId, time() + 3600, "/");

    if ($_COOKIE['loginUser'] == 'admin') {
        header("Location: index.php");
    } else {
        $fail = true;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>로그인</title>
</head>

<body>
    <div class="container">
        <form action="" method="post" name="loginForm" class="form-signin">
            <h2 class="form-signin-heading">로그인</h2>
            <label for="inputUserId" class="sr-only">UserId</label>
            <input name="userId" type="text" id="inputUserId" class="form-control" placeholder="UserId" required
                autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password"
                required>
            <button name="submit" value="로그인" class="btn btn-lg btn-primary btn-block" type="submit">로그인</button>

            <?php
                if ($fail) {
                    echo '<div id="errorMsg" class="alert alert-danger alert-dismissable d-none" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <strong>Warning!</strong> 로그인 실패!
                        </div>';
                }
            ?>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>