<?php
define('PAGE_NAME', 'Course - Confirmation');

include('../main.php');
include('../connection/main.php');
include('../utils/checker.php');
include('../utils/getter.php');

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
    include('../parts/nav.php');
    ?>
        
    </div>

    <?php

    echo getUserName($SQL_Handle, getTutorUserID($SQL_Handle, $_GET['tutor-id']));
    echo getCourseName($SQL_Handle, $_GET['course-id']);
    echo getTCFee($SQL_Handle, getTCID($SQL_Handle, $_GET['course-id']));

    echo '<a href="confirm.php?tutor-id=' . $_GET['tutor-id'] . '&course-id=' . $_GET['course-id'] . '">Avail</a>';
    ?>
</body>
</html>