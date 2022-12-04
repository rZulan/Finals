<?php
define('PAGE_NAME', 'Tutors');

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

    <link rel="stylesheet" href="tutors.css">
    
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../parts/nav.php');
    ?>
    
    <div class="tutors">
        <?php
        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutors;");
        $stmt->execute([]);

        foreach($stmt->fetchAll() as $tutor) {
            echo "<div class='tutor'>";
                echo "<img src='/assets/stock/400x600.png' alt=''>";
                echo "<h1>" . getUserFullName($SQL_Handle, $tutor['user_id']) . "</h1>";
            echo "</div>";
        }
        ?>
        
        <div class="tutor">
            <img src="/assets/stock/400x600.png" alt="">
            <h1>Full Name Template</h1>
        </div>
        <div class="tutor">
            <img src="/assets/stock/400x600.png" alt="">
            <h1>Full Name Template</h1>
        </div>
        <div class="tutor">
            <img src="/assets/stock/400x600.png" alt="">
            <h1>Full Name Template</h1>
        </div>
        <div class="tutor">
            <img src="/assets/stock/400x600.png" alt="">
            <h1>Full Name Template</h1>
        </div>
        <div class="tutor">
            <img src="/assets/stock/400x600.png" alt="">
            <h1>Full Name Template</h1>
        </div>
        <div class="tutor">
            <img src="/assets/stock/400x600.png" alt="">
            <h1>Full Name Template</h1>
        </div>
    </div>
</body>
</html>