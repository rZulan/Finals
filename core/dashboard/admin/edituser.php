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
        echo '<input type="text" autocomplete="off" name="edit-user-name" id="edit-user-name" placeholder="' . getUserName($SQL_Handle, $_GET['edit-user']) . '">';
        echo '<input type="password" autocomplete="new-password" name="edit-user-password" id="edit-user-password" placeholder="password">';
        echo '<input type="text" autocomplete="off" name="edit-user-email" id="edit-user-email" placeholder="' . getUserEmail($SQL_Handle, $_GET['edit-user']) . '">';
        echo '<input type="text" autocomplete="off" name="edit-user-cemail" id="edit-user-cemail" placeholder="' . getUserContactEmail($SQL_Handle, $_GET['edit-user']) . '">';
        echo '<input type="text" autocomplete="off" name="edit-user-phone" id="edit-user-phone" placeholder="' . getUserPhone($SQL_Handle, $_GET['edit-user']) . '">';
        echo '<input type="text" autocomplete="off" name="edit-user-messenger" id="edit-user-messenger" placeholder="' . getUserMessenger($SQL_Handle, $_GET['edit-user']) . '">';
        echo '<input type="text" autocomplete="off" name="edit-user-balance" id="edit-user-balance" placeholder="' . getUserBalance($SQL_Handle, $_GET['edit-user']) . '">';

        ?>

        <input type="submit" value="Save" name="save-button">
    </form>
    
</body>
</html>