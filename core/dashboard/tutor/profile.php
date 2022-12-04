<?php
define('PAGE_NAME', 'Tutor - Profile');

include('../../../main.php');
include('../../../connection/main.php');
include('../../../utils/checker.php');
include('../../../utils/getter.php');
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
    include('../../../parts/sidebar.php');
    ?>
    
    <div class="profile-container">
        <div class="name-and-pic">
            <h3>
                <?=getUserName($SQL_Handle)?>
            </h3>
            <h4>
                <?=getUserFullName($SQL_Handle, $userid)?>
            </h4>
            <img src="/assets/stock/pfp-template.png" alt="" height="100px" width="100px">
        </div>

        <div class="subjects-teach">
            
        </div>
    </div>
</body>
</html>