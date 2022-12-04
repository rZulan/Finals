<?php
define('PAGE_NAME', 'Login');

include('../../main.php');
include('../../connection/main.php');

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
    
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../../parts/logo.php');
    ?>
    
    <?php
    if(isset($_POST['login-button'])) {
        $username = $_POST['login-email-username'];
        $userpass = $_POST['login-password'];
        
        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.users WHERE user_name = ?;");
        $stmt->execute([$username]);

        if($stmt->rowCount()) {
            $result = $stmt->fetch();

            if(password_verify($userpass, $result['user_password'])) {
                $_SESSION['user_id'] = $result['user_id'];
                echo "<script>alert(\"You are now Logged in!\")</script>";
                header('location:../../../../core/home.php');
            } else {
                echo "<script>alert(\"Wrong password entered!\")</script>";
            }
        } else {
            echo "<script>alert(\"Username not registered!\")</script>";
        }

        $stmt = null;
    }
    ?>
    
    <form action="" method="POST">
        <h1><?=strtoupper(PAGE_NAME)?></h1>
        <div class="login-inputs">
            <label for="login-email-username">Username/E-Mail</label>
            <input type="text" name="login-email-username" id="login-email-username" placeholder="Enter Username/E-Mail">

            <label for="login-password">Password</label>
            <input type="password" name="login-password" id="login-password" placeholder="Enter Password">

            <input type="submit" value="LOGIN" name="login-button" id="login-button">
        </div>
    </form>
    <a href="../register/register.php">Don't have an account? Register now!</a>
</body>
</html>