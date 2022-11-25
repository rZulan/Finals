<?php

define('PAGE_NAME', 'Home');

include('../main.php');
include('../utils/checker.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
    
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../parts/nav.php');
    ?>

    <header>
        <h1>Interactive Tutoring Inside Campus!</h1>
        <h3>Need help with your subjects in CSS? Do you want to expand your knowledge in coding? Meet with our tutors now.</h3>

        <a href="" id="test">Meet the Tutors</a>
    </header>

    <div class="courses-introduction">
        <h2>Get 1:1 Help Inside Campus!</h2>
        <h3>Check out our top courses.</h3>
    </div>
    <div class="top-courses">
        <div class="top-course">
            <img src="../assets/icons/python.png" alt="">
            <h2>Python</h2>
            <a href="">Tutors →</a>
        </div>

        <div class="top-course">
            <img src="../assets/icons/java.png" alt="">
            <h2>Java</h2>
            <a href="">Tutors →</a>
        </div>

        <div class="top-course">
            <img src="../assets/icons/cpp.png" alt="">
            <h2>C++</h2>
            <a href="">Tutors →</a>
        </div>

        <div class="top-course">
            <img src="../assets/icons/algorithms.png" alt="">
            <h2>Algorithms</h2>
            <a href="">Tutors →</a>
        </div>


        <div class="top-course">
            <img src="../assets/icons/html.png" alt="">
            <h2>HTML5</h2>
            <a href="">Tutors →</a>
        </div>

        <div class="top-course">
            <img src="../assets/icons/javascript.png" alt="">
            <h2>Javascript</h2>
            <a href="">Tutors →</a>
        </div>

        <div class="top-course">
            <img src="../assets/icons/php.png" alt="">
            <h2>PHP</h2>
            <a href="">Tutors →</a>
        </div>

        <div class="top-course">
            <img src="../assets/icons/css.png" alt="">
            <h2>CSS3</h2>
            <a href="">Tutors →</a>
        </div>


        <div class="top-course">
            <img src="../assets/icons/computer-networks.png" alt="">
            <h2>Computer Networks</h2>
            <a href="">Tutors →</a>
        </div>

        <div class="top-course">
            <img src="../assets/icons/sql.png" alt="">
            <h2>SQL</h2>
            <a href="">Tutors →</a>
        </div>

        <div class="top-course">
            <img src="../assets/icons/software-development.png" alt="">
            <h2>Software Development</h2>
            <a href="">Tutors →</a>
        </div>

        <div class="top-course">
            <img src="../assets/icons/mobile-development.png" alt="">
            <h2>Mobile Development</h2>
            <a href="">Tutors →</a>
        </div>
    </div>

    <footer>
        
    </footer>
    
</body>

</html>