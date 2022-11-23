<?php
define('PAGE_NAME', 'Login');

include('../../main.php');
include('../../connection/main.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    if(isset($_POST['login-button'])) {
        $username = $_POST['login-email-username'];
        $userpass = $_POST['login-password'];
        
        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.users WHERE user_name = ?;");
        $stmt->execute([$username]);

        $result = $stmt->fetch();
        
        if(password_verify($userpass, $result['user_password'])) {
            echo "logged in!";
        } else {
            echo "wrong password!";
        }
        
        $stmt = null;

        // if(password_verify($userpass, $result[2])) {
        //     echo "logged in!";
        // } else {
        //     echo "wrong password!";
        // }
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
</body>
</html>