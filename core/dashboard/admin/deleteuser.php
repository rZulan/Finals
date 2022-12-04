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

    echo "deleting user " . getUserFullName($SQL_Handle, $_GET['edit-user']);
    
    ?>
    
</body>
</html>