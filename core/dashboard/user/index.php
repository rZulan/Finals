<?php
define('PAGE_NAME', 'Tutor');

include('../../../main.php');
include('../../../utils/checker.php');
include('../../../connection/main.php');
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
    include('../../../parts/nav.php');
    include('../../../parts/sidebar.php')
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