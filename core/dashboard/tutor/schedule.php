<?php
define('PAGE_NAME', 'Tutor - Schedule');

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
    
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body> 
    <?php
    include('../../../parts/nav.php');
    ?>

    <div class="side-bar">
        <ul>
            <a href="../../home.php">HOME</a>
            <?php
            if(isTutor($SQL_Handle, $_SESSION['user_id'])) {
                echo "<a href=\"../tutor/index.php\">TUTOR</a>";
            }
            ?>
            <a href="">PROFILE</a>
            <a href="">ACCOUNT</a>
            <a href="">LOGOUT</a>
        </ul>
    </div>

</body>
</html>