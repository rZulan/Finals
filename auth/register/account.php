<?php
define('PAGE_NAME', 'Register');

include('../../main.php');
include('../../connection/main.php');

if(isset($_POST['register-button1'])) {
    $fName = $_POST['pi-input-fname'];
    $mName = $_POST['pi-input-mname'];
    $lName = $_POST['pi-input-lname'];

    $email = $_POST['ci-input-email'];
    $phone = $_POST['ci-input-number'];
    $messenger = $_POST['ci-input-messenger'];

    $cor = $_POST['si-input-cor'];
}

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
    ?>

    <?php
    if(isset($_POST['register-button2'])) {
        if($_POST['rf-acc-password'] == $_POST['rf-acc-password2']) {
            $username = $_POST['rf-acc-name'];
            $userpass = password_hash($_POST['rf-acc-password'], PASSWORD_BCRYPT);
            
            $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.users WHERE user_name = ?;");
            $stmt->execute([$username]);

            if($stmt->rowCount() <= 0) {
                $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.users(user_name, user_password) VALUES(?, ?);");
                $stmt->execute([$username, $userpass]);

                $_SESSION['user_id'] = $SQL_Handle->lastInsertId();
                
                $stmt = null;


                header('location:../../../../core/home.php');
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