<?php
define('PAGE_NAME', 'Home');

include('main.php');
include('connection/main.php');
include('utils/checker.php');
include('utils/getter.php');

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
    include('parts/nav.php');
    ?>

    <div class="intro-text">
        <h1>Tutoring Inside DHVSU Campus!</h1>
        <p>It's easier and more fun to learn now with Learn++!</p>
    </div>

    <div class="intro-courses">
        <h1>Check out our different courses!</h1>

        <div class="intro-courses-container">
            <div class="intro-course">
                <img src="/assets/icons/php.png" alt="">
                <h2>PHP</h2>
            </div>
            <div class="intro-course">
                <img src="/assets/icons/html.png" alt="">
                <h2>HTML</h2>
            </div>
            <div class="intro-course">
                <img src="/assets/icons/css.png" alt="">
                <h2>CSS</h2>
            </div>
            <div class="intro-course">
                <img src="/assets/icons/javascript.png" alt="">
                <h2>Javascript</h2>
            </div>
        </div>
        <a href="">View All Courses</a>
    </div>

    <div class="tutors">
        <h1>Meet our Tutors!</h1>
        
        <div class="tutors-container">
            <div class="tutor">
                <img src="/assets/stock/man-cross-arms.png" alt="">
            </div>
            <div class="tutor">
                <img src="/assets/stock/man-cross-arms.png" alt="">
            </div>
            <div class="tutor">
                <img src="/assets/stock/man-cross-arms.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>