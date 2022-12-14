<?php
define('PAGE_NAME', 'Register');

include('../../main.php');
include('../../connection/main.php');
include('../../utils/checker.php');
include('../../utils/getter.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="register.css">

    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../../parts/nav.php');
    ?>
    
    <div class="register-type-container">
        

        <div class="register-type">
            <h1>What are you signing up for?</h1>
            <div class="register-choices">
                <a href="choices/tutor.php" id="as-tutor">I'm a Tutor</a>
                <a href="choices/student.php" id="as-student">I'm a Student</a>
                <a href="account.php" id="undecided">I'm a Guest</a>
            </div>
        </div>

        <h5 id="register-back-button">
            <a href="/core/home.php">Back to home page >></a>
        </h5>
    </div>
</body>
</html>