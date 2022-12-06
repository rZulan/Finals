<?php
define('PAGE_NAME', 'Register');

include('../../../main.php');
include('../../../connection/main.php');
include('../../../utils/checker.php');

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
    <div class="registration-form">
        <?php
        include('../../../parts/logo.php');

        if(isset($_POST['register-button1'])) {
            if(isLoggedIn()) {
                $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET
                    user_fname = ?,
                    user_mname = ?,
                    user_lname = ?,
                    user_cemail = ?,
                    user_phone = ?,
                    user_messenger = ?
                WHERE user_id = ?;");

                $stmt->execute([
                    $_POST['pi-input-fname'],
                    $_POST['pi-input-mname'],
                    $_POST['pi-input-lname'],
                    $_POST['ci-input-email'],
                    $_POST['ci-input-number'],
                    $_POST['ci-input-messenger'],
                    $_SESSION['user_id']
                ]);

                $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.tutors(user_id) VALUES(?);");
                $stmt->execute([$_SESSION['user_id']]);

                header('location: ../../../../../core/home.php');
            } else {
                $_SESSION['fortutor'] = true;
                
                $_SESSION['user-fname'] = $_POST['pi-input-fname'];
                
                $_SESSION['user-mname'] = $_POST['pi-input-mname'];
                $_SESSION['user-lname'] = $_POST['pi-input-lname'];
            
                $_SESSION['user-cemail'] = $_POST['ci-input-email'];
                $_SESSION['user-phone'] = $_POST['ci-input-number'];
                $_SESSION['user-messenger'] = $_POST['ci-input-messenger'];
            
                $_SESSION['user-cor'] = $_POST['si-input-cor'];
                header('location: ../account.php');
            }
        }
        
        ?>

        <form action="" method="post">
            <div class="rf-pi-form">
                <h2>Personal Information</h2>
                <label for="pi-input-fname">First Name</label>
                <input type="text" name="pi-input-fname" id="pi-input-fname" required="true">

                <label for="pi-input-mname">Middle Name</label>
                <input type="text" name="pi-input-mname" id="pi-input-mname" required="true">
                
                <label for="pi-input-lname">Last Name</label>
                <input type="text" name="pi-input-lname" id="pi-input-lname" required="true">
            </div>

            <div class="rf-ci-form">
                <h2>Contact Information</h2>
                <label for="ci-input-email">Email</label>
                <input type="text" name="ci-input-email" id="ci-input-email" required="true">

                <label for="ci-input-number">Phone Number</label>
                <input type="text" name="ci-input-number" id="ci-input-number" required="true">
                
                <label for="ci-input-messenger">Messenger Link</label>
                <input type="text" name="ci-input-messenger" id="ci-input-messenger" required="true">
            </div>

            <div class="rf-si-form">
                <h2>School Information</h2>
                <label for="si-input-cor">COR</label>
                <input type="file" name="si-input-cor" id="si-input-cor" required="true">
            </div>

            <input type="submit" value="Next" name="register-button1" id="register-button1">
        </form>
    </div>
</body>
</html>