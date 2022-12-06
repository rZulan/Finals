<?php
define('PAGE_NAME', 'Tutor');

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

    echo getUserName($SQL_Handle, $_SESSION['user_id']);
    ?>

    <div class="db-options">
        <ul>
            <li><a href="mycourses.php">My Courses</a></li>
            <li><a href="/core/courses.php">All Courses</a></li>
            <li><a href="sessions.php">My Sessions</a></li>
            <li><a href="tutors.php">Tutors</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </div>
    
</body>
</html>