<?php
define('PAGE_NAME', 'Admin');

include('../../../main.php');
include('../../../connection/main.php');
include('../../../utils/checker.php');
include('../../../utils/getter.php');

if(isLoggedIn() and !hasAccount2($SQL_Handle, $_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    header('location: ../../../../../auth/login/login.php');
}


if(!isLoggedIn()) {
    header('location: ../../../../../auth/login/login.php');
}

if(!isAdmin($SQL_Handle, $_SESSION['user_id'])) {
    header('location: ../../../../../core/home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/style.css">

    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../../../parts/nav.php');
    include('../../../parts/sidebar.php');
    
    if(isset($_POST['save-button'])) {
        if(!empty($_POST['edit-user-name'])) {
            $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_name = ? WHERE user_id = ?;");
            $stmt->execute([$_POST['edit-user-name'], $_GET['edit-user']]);
        }
        if(!empty($_POST['edit-user-password'])) {
            $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_password = ? WHERE user_id = ?;");
            $stmt->execute([password_hash($_POST['edit-user-password'], PASSWORD_BCRYPT), $_GET['edit-user']]);
        }
        if(!empty($_POST['edit-user-email'])) {
            $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_email = ? WHERE user_id = ?;");
            $stmt->execute([$_POST['edit-user-email'], $_GET['edit-user']]);
        }

        if(!empty($_POST['edit-user-fname'])) {
            $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_fname = ? WHERE user_id = ?;");
            $stmt->execute([$_POST['edit-user-fname'], $_GET['edit-user']]);
        }
        if(!empty($_POST['edit-user-mname'])) {
            $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_mname = ? WHERE user_id = ?;");
            $stmt->execute([$_POST['edit-user-mname'], $_GET['edit-user']]);
        }
        if(!empty($_POST['edit-user-lname'])) {
            $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_lname = ? WHERE user_id = ?;");
            $stmt->execute([$_POST['edit-user-lname'], $_GET['edit-user']]);
        }

        if(!empty($_POST['edit-user-cemail'])) {
            $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_cemail = ? WHERE user_id = ?;");
            $stmt->execute([$_POST['edit-user-cemail'], $_GET['edit-user']]);
        }
        if(!empty($_POST['edit-user-phone'])) {
            $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_phone = ? WHERE user_id = ?;");
            $stmt->execute([$_POST['edit-user-phone'], $_GET['edit-user']]);
        }
        if(!empty($_POST['edit-user-messenger'])) {
            $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_messenger = ? WHERE user_id = ?;");
            $stmt->execute([$_POST['edit-user-messenger'], $_GET['edit-user']]);
        }
        if(!empty($_POST['edit-user-balance'])) {
            $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_balance = ? WHERE user_id = ?;");
            $stmt->execute([$_POST['edit-user-balance'], $_GET['edit-user']]);
        }

        $stmt = null;
    }
    
    ?>
    <form action="" method="post">
        <?php
        
        
        echo '
            <label for="edit-user-name">Username</label>
            <input type="text" autocomplete="off" name="edit-user-name" id="edit-user-name" placeholder="' . getUserName($SQL_Handle, $_GET['edit-user']) . '">
            <label for="edit-user-password">Password</label>
            <input type="password" autocomplete="new-password" name="edit-user-password" id="edit-user-password" placeholder="password">
            <label for="edit-user-email">Email</label>
            <input type="email" autocomplete="off" name="edit-user-email" id="edit-user-email" placeholder="' . getUserEmail($SQL_Handle, $_GET['edit-user']) . '">

            <label for="edit-user-fname">First Name</label>
            <input type="text" autocomplete="off" name="edit-user-fname" id="edit-user-fname" placeholder="' . getUserFirstName($SQL_Handle, $_GET['edit-user']) . '">
            <label for="edit-user-mname">Middle Name</label>
            <input type="text" autocomplete="off" name="edit-user-mname" id="edit-user-mname" placeholder="' . getUserMiddleName($SQL_Handle, $_GET['edit-user']) . '">
            <label for="edit-user-lname">Last Name</label>
            <input type="text" autocomplete="off" name="edit-user-lname" id="edit-user-lname" placeholder="' . getUserLastName($SQL_Handle, $_GET['edit-user']) . '">
            
            <label for="edit-user-cemail">Contact Email</label>
            <input type="email" autocomplete="off" name="edit-user-cemail" id="edit-user-cemail" placeholder="' . getUserContactEmail($SQL_Handle, $_GET['edit-user']) . '">
            <label for="edit-user-phone">Phone Number</label>
            <input type="text" autocomplete="off" name="edit-user-phone" id="edit-user-phone" placeholder="' . getUserPhone($SQL_Handle, $_GET['edit-user']) . '">
            <label for="edit-user-messenger">Messenger Link</label>
            <input type="text" autocomplete="off" name="edit-user-messenger" id="edit-user-messenger" placeholder="' . getUserMessenger($SQL_Handle, $_GET['edit-user']) . '">
            <label for="edit-user-balance">Balance</label>
            <input type="text" autocomplete="off" name="edit-user-balance" id="edit-user-balance" placeholder="' . getUserBalance($SQL_Handle, $_GET['edit-user']) . '">
        ';

        ?>

        <input type="submit" value="Save" name="save-button">
    </form>
</body>
</html>