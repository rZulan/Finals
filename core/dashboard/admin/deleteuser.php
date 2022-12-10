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

    if(isTutor($SQL_Handle, $_GET['delete-user'])) {
        $stmt = $SQL_Handle->prepare("DELETE FROM learnpp.tutors WHERE user_id = ?;");
        $stmt->execute([$_GET['delete-user']]);
    }
    
    $stmt = $SQL_Handle->prepare("DELETE FROM learnpp.users WHERE user_id = ?;");
    $stmt->execute([$_GET['delete-user']]);

    header('location: users.php');
    
    ?>
    
</body>
</html>