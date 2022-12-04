<?php
define('PAGE_NAME', 'Tutor');

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
    <?php
    include('../../../parts/nav.php');
    include('../../../parts/sidebar.php')
    ?>

    <div class="db-options">
        <ul>
            <li><a href="schedule.php">Users</a></li>
            <li><a href="tutors.php">Tutors</a></li>
            <li><a href="sessions.php">Sessions</a></li>
            <li><a href="stats.php">Stats</a></li>
            <li><a href="settings.php">Website Settings</a></li>
        </ul>
    </div>
    
</body>
</html>