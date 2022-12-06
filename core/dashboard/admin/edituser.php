<?php
define('PAGE_NAME', 'Admin');

include('../../../main.php');
include('../../../connection/main.php');
include('../../../utils/checker.php');
include('../../../utils/getter.php');


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
        $stmt = $SQL_Handle->prepare("UPDATE learnpp.users SET user_name");
    }
    
    ?>
    <form action="" method="post">
        <?php
        echo '<input type="text" name="edit-user-name" id="edit-user-name" autocomplete="off" placeholder="' . getUserName($SQL_Handle, $_GET['edit-user']) . '">';
        echo '<input type="text" name="edit-user-name" id="edit-user-name" autocomplete="off" placeholder="' . getUserEmail($SQL_Handle, $_GET['edit-user']) . '">';
        echo '<input type="password" name="edit-user-password" id="edit-user-password" autocomplete="off" placeholder=>';
        echo '<input type="text" name="edit-user-name" id="edit-user-name" autocomplete="off" placeholder="' . getUserContactEmail($SQL_Handle, $_GET['edit-user']) . '">';
        echo '<input type="text" name="edit-user-name" id="edit-user-name" autocomplete="off" placeholder="' . getUserPhone($SQL_Handle, $_GET['edit-user']) . '">';
        echo '<input type="text" name="edit-user-name" id="edit-user-name" autocomplete="off" placeholder="' . getUserMessenger($SQL_Handle, $_GET['edit-user']) . '">';
        echo '<input type="text" name="edit-user-name" id="edit-user-name" autocomplete="off" placeholder="' . getUserBalance($SQL_Handle, $_GET['edit-user']) . '">';

        ?>

        <input type="submit" value="Save" name="save-button">
    </form>
    
</body>
</html>