<?php
define('PAGE_NAME', 'Home');

include('main.php');
include('connection/main.php');

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
    <nav>
        <?php
        include('parts/logo.php');
        ?>
        <ul>
            <li><a href="">About</a></li>
            <li><a href="/core/courses.php">Courses</a></li>
            <li><a href="/core/tutors.php">Tutors</a></li>
            <li><a href="auth/login/login.php">Login</a></li>
            <li><a href="auth/register/register.php" id="register-button">Register</a></li>
        </ul>
    </nav>

    <div class="description">
        <h1>Interactive Tutoring Inside DHVSU Campus!</h1>
        <h3>Get a tutor or become one! Join us by signing up!</h3>
    </div>

    <div class="buttons">
        <a href="" id="apply">Become a Tutor</a>
        <a href="" id="learn">Learn</a>
    </div>

</body>
</html>