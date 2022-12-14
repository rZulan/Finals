<?php
define('PAGE_NAME', 'Register');

include('../../main.php');
include('../../connection/main.php');
include('../../utils/checker.php');
include('../../utils/logger.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="account.css">
    
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>

    <?php
    include('../../parts/nav.php');

    if(isset($_POST['register-button2'])) {
        $validated = true;
        
        $username = $_POST['rf-acc-name'];
        $userpass = password_hash($_POST['rf-acc-password'], PASSWORD_BCRYPT);
        $useremail = $_POST['rf-acc-email'];

        if($_POST['rf-acc-password'] != $_POST['rf-acc-password2']) {
            echo '<script>alert("Passwords do not match!")</script>';
            $validated = false;
        }

        if(hasAccount($SQL_Handle, $username)) {
            echo '<script>alert("Username is already registered!")</script>';
            $validated = false;
        }

        if($validated) {
            if($_SESSION['fortutor']) {
                // INSERT USER INTO USERS TABLE
                $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.users(user_name, user_password, user_email, user_ip, user_fname, user_mname, user_lname, user_cEmail, user_phone, user_messenger) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
                $stmt->execute([$username, $userpass, $useremail, $_SERVER['REMOTE_ADDR'], $_SESSION['user-fname'], $_SESSION['user-mname'], $_SESSION['user-lname'], $_SESSION['user-cemail'], $_SESSION['user-phone'], $_SESSION['user-messenger']]);
                $_SESSION['user_id'] = $SQL_Handle->lastInsertId();

                // INSERT USER INTO TUTORS TABLE
                $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.tutors(user_id) VALUES(?);");
                $stmt->execute([$SQL_Handle->lastInsertId()]);

                $_SESSION['fortutor'] = null;
                $_SESSION['user-fname'] = null;
                $_SESSION['user-mname'] = null;
                $_SESSION['user-lname'] = null;
                $_SESSION['user-cemail'] = null;
                $_SESSION['user-phone'] = null;
                $_SESSION['user-messenger'] = null;
            } else {
                // INSERT USER INTO USERS TABLE
                $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.users(user_name, user_password, user_email, user_ip) VALUES(?, ?, ?, ?);");
                $stmt->execute([$username, $userpass, $useremail, $_SERVER['REMOTE_ADDR']]);
                $_SESSION['user_id'] = $SQL_Handle->lastInsertId();
            }
            
            logTrail($SQL_Handle, LOGTRAIL_AUTH, ("New user registered with <b>[username: $username | email: $useremail | ip: " . $_SERVER['REMOTE_ADDR'] . "]</b>."));
            header('location: ../../../../core/home.php');
        } else {
            echo '<script>alert("An error has occured!")</script>';
        }
    }
    ?>

    <div class="register-form">
        <div class="ri-img-container">
            <img src="/assets/logo.png" alt="">
        </div>

        <form action="" method="post">
            <h1><?=strtoupper(PAGE_NAME)?></h1>
            <div class="register-inputs">
                <div class="ri-inputs ri-email">
                    <label for="rf-acc-email">Email</label>
                    <?php
                    if(isset($_SESSION['user-cemail'])) {
                        echo '<input type="email" name="rf-acc-email" id="rf-acc-email" value="' . $_SESSION['user-cemail'] . '">';
                    } else {
                        echo '<input type="email" name="rf-acc-email" id="rf-acc-email">';
                    }
                    ?>
                </div>

                <div class="ri-inputs ri-username">
                    <label for="rf-acc-name">Username</label>
                    <input type="text" name="rf-acc-name" id="rf-acc-name">
                </div>

                <div class="ri-inputs ri-password">
                    <label for="rf-acc-password">Password</label>
                    <input type="password" name="rf-acc-password" id="rf-acc-password">
                </div>
                
                <div class="ri-inputs ri-password2">
                    <label for="rf-acc-password2">Confirm Password</label>
                    <input type="password" name="rf-acc-password2" id="rf-acc-password2">
                </div>
        
                <input type="submit" value="Register" name="register-button2" id="register-button2" required="true">
            </div>
        </form>

        <div class="ri-other-choices">
            <a href="../login/login.php">Already registered? Login now.</a>
        </div>
    </div>

</html>