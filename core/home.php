<?php

define('PAGE_NAME', 'Home');

include('../main.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/b2d3b16261.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="style.css">
    
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <nav>
        <?php
        echo $_SESSION['user_id'];
        
        include('../parts/logo.php');
        ?>

        <ul>
            <a href="#">Find a Tutor</a>
            <a href="#">How it Works</a>
            <a href="#">Become a Tutor</a>
            <a href="#">Account</a>
        </ul>
    </nav>

    <header>
        <h1>Interactive Tutoring Inside Campus!</h1>
        <h3>Need help with your subjects in CSS? Do you want to expand your knowledge in coding? Meet with our tutors now.</h3>

        <a href="">Meet the Tutors</a>
    </header>

    <div class="courses-introduction">
        <h2>Get 1:1 Help Inside Campus!</h2>
        <h3>Check out our top courses.</h3>
    </div>
    <div class="top-courses">
        <div class="top-course">
            <i class="fa-brands fa-python"></i>
            <h2>Python</h2>
            <a href="">Meet Tutors</a>
        </div>

        <div class="top-course">
            <i class="fa-brands fa-java"></i>
            <h2>Java</h2>
            <a href="">Meet Tutors</a>
        </div>

        <div class="top-course">
            <i class="fa-brands fa-c"></i>
            <h2>C</h2>
            <a href="">Meet Tutors</a>
        </div>

        <div class="top-course">
            <i class="fa-solid fa-code-branch"></i>
            <h2>Algorithms</h2>
            <a href="">Meet Tutors</a>
        </div>


        <div class="top-course">
            <i class="fa-brands fa-html5"></i>
            <h2>HTML5</h2>
            <a href="">Meet Tutors</a>
        </div>

        <div class="top-course">
            <i class="fa-brands fa-square-js"></i>
            <h2>Javascript</h2>
            <a href="">Meet Tutors</a>
        </div>

        <div class="top-course">
            <i class="fa-brands fa-php"></i>
            <h2>PHP</h2>
            <a href="">Meet Tutors</a>
        </div>

        <div class="top-course">
            <i class="fa-brands fa-css3-alt"></i>
            <h2>CSS3</h2>
            <a href="">Meet Tutors</a>
        </div>


        <div class="top-course">
            <i class="fa-solid fa-network-wired"></i>
            <h2>Computer Networks</h2>
            <a href="">Meet Tutors</a>
        </div>

        <div class="top-course">
            <i class="fa-solid fa-database"></i>
            <h2>SQL</h2>
            <a href="">Meet Tutors</a>
        </div>

        <div class="top-course">
            <i class="fa-solid fa-computer"></i>
            <h2>Software Development</h2>
            <a href="">Meet Tutors</a>
        </div>

        <div class="top-course">
            <i class="fa-solid fa-mobile"></i>
            <h2>Mobile Development</h2>
            <a href="">Meet Tutors</a>
        </div>
    </div>
    
</body>

</html>