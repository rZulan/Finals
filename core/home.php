<?php

define('PAGE_NAME', 'Home');

include('../main.php');
include('../connection/main.php');
include('../utils/checker.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../parts/nav.php');
    ?>

    <header>
        <h1>Interactive Tutoring Inside DHVSU Campus!</h1>
        <h3>Need help with your subjects in CCS? Do you want to expand your knowledge in coding? Meet with our tutors now.</h3>

        <a href="/core/tutors.php" id="test">Meet the Tutors</a>
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

    <div class="ad-section-container">
        <div class="check-courses-ad">
            <h1>Get Started</h1>
            <p>Check out all the courses available to start your learning sessions with a tutor!</p>
            <a href="" id="view-courses-button">View All Courses</a>
        </div>
    </div>

    <div class="ad-section-container">
        <div class="become-a-tutor-ad">
            <div class="b-a-tutor-intro">
                <h1>Become a Tutor now.</h1>
                <p>Do you plan on becoming a tutor and help students with their studies? This is your chance to make a change!</p>
                <a href="" id="become-a-tutor-button">Apply as Tutor</a>
            </div>
            <img src="../assets/stock/man-cross-arms.png" alt="">
        </div>
    </div>

    <footer>
        
    </footer>
    
</body>

</html>