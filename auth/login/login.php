<?php
define('PAGE_NAME', 'Login');

include('../../main.php');
include('../../connection/main.php');
include('../../utils/checker.php');
include('../../utils/getter.php');
include('../../utils/logger.php');

if(isLoggedIn()) {
    header('location: ../../core/home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="login.css">

    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../../parts/nav.php');
    ?>
    
    <?php
    if(isset($_POST['login-button'])) {
        $username = $_POST['login-email-username'];
        $userpass = $_POST['login-password'];

        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.users WHERE user_email = ? OR user_name = ? LIMIT 1;");
        $stmt->execute([$username, $username]);

        if($stmt->rowCount()) {
            $result = $stmt->fetch();

            if(password_verify($userpass, $result['user_password'])) {
                $_SESSION['user_id'] = $result['user_id'];
                echo '<script>alert("You are now Logged in!")</script>';
                logTrail($SQL_Handle, LOGTRAIL_AUTH, ("User [" . $_SESSION['user_id'] . "] " . getUserName($SQL_Handle, $_SESSION['user_id']) ." just logged in."));

                header('location:../../../../core/home.php');
            } else {
                logTrail($SQL_Handle, LOGTRAIL_AUTH, ("User tried to login with IP: " . $_SERVER['REMOTE_ADDR'] . "."));
                echo '<script>alert(""Wrong password entered!")</script>';
            }
        } else {
            echo '<script>alert("Username not registered!")</script>';
        }

        $stmt = null;
    }
    ?>
    
    <div class="login-form">
        <div class="li-img-container">
            <img src="/assets/logo.png" alt="">
        </div>
        <form action="" method="POST">
            <h1><?=strtoupper(PAGE_NAME)?></h1>
            <div class="login-inputs">
                <div class="li-inputs li-email">
                    <label for="login-email-username">Username/E-Mail</label>
                    <input type="text" name="login-email-username" id="login-email-username" placeholder="Enter Username/E-Mail">
                </div>

                <div class="li-inputs li-password">
                    <label for="login-password">Password</label>
                    <input type="password" name="login-password" id="login-password" placeholder="Enter Password">
                </div>

                <input type="submit" value="LOGIN" name="login-button" id="login-button">
            </div>
        </form>

        <div class="li-other-choices">
            <a href="../register/register.php">Don't have an account? Register now!</a>
            <a href="forgot-password.php">Forgot Password?</a>
        </div>
    </div>
</body>
</html>