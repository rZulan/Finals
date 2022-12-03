<?php
define('PAGE_NAME', 'Register');

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
    include('../../parts/logo.php');

    if(isset($_POST['register-button2'])) {
        if($_POST['rf-acc-password'] == $_POST['rf-acc-password2']) {
            $username = $_POST['rf-acc-name'];
            $userpass = password_hash($_POST['rf-acc-password'], PASSWORD_BCRYPT);
            $useremail = $_POST['rf-acc-email'];
            
            $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.users WHERE user_name = ?;");
            $stmt->execute([$username]);

            if($stmt->rowCount() <= 0) {
                if($_SESSION['fortutor']) {
                    // INSERT USER INTO USERS TABLE
                    $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.users(user_name, user_password, user_email, user_fname, user_mname, user_lname, user_cEmail, user_phone, user_messenger) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?);");
                    $stmt->execute([$username, $userpass, $useremail, $_SESSION['user-fname'], $_SESSION['user-mname'], $_SESSION['user-lname'], $_SESSION['user-cemail'], $_SESSION['user-phone'], $_SESSION['user-messenger']]);
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
                    $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.users(user_name, user_password, user_email) VALUES(?, ?, ?);");
                    $stmt->execute([$username, $userpass, $useremail]);
                    $_SESSION['user_id'] = $SQL_Handle->lastInsertId();
                }
                
                $stmt = null;

                header('location: ../../../../core/home.php');
            } else {
                echo "<script>alert(\"Username is already registered!\")</script>";
            }
        } else {
            echo "<script>alert(\"Passwords do not match!\")</script>";
        }

        $_POST = array();
    }
    ?>

    <form action="" method="post">
        <label for="rf-acc-email">Email</label>
        <input type="email" name="rf-acc-email" id="rf-acc-email">
        
        <label for="rf-acc-name">Username</label>
        <input type="text" name="rf-acc-name" id="rf-acc-name">

        <label for="rf-acc-password">Password</label>
        <input type="password" name="rf-acc-password" id="rf-acc-password">

        <label for="rf-acc-password2">Confirm Password</label>
        <input type="password" name="rf-acc-password2" id="rf-acc-password2">

        <input type="submit" value="Register" name="register-button2" id="register-button2" required="true">
    </form>

    <a href="../login/login.php">Already registered? Login now.</a>
</body>
</html>