<?php
define('PAGE_NAME', 'Register');

include('../../main.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    
    ?>
    
    <div class="register-type-container">
        <?php
        include('../../parts/logo.php');
        ?>

        <div class="register-type">
            <h1>What are you signing up for?</h1>
            <div class="register-choices">
                <a href="" id="as-tutor">I'm a Tutor</a>
                <a href="" id="as-student">I'm a Student</a>
                <a href="" id="undecided">I'll choose later</a>
            </div>
        </div>

        <h5 id="register-back-button">
            <a href="../../index.php">Back to menu >></a>
        </h5>
    </div>
    
</body>
</html>