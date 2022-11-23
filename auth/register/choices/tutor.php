<?php
define('PAGE_NAME', 'Register');

include('../../../main.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <div class="registration-form">
        <?php
        include('../../../parts/logo.php');
        ?>

        <form action="../account.php" method="post">
            <div class="rf-pi-form">
                <h2>Personal Information</h2>
                <label for="pi-input-fname">First Name</label>
                <input type="text" name="pi-input-fname" id="pi-input-fname" required="true">
    
                <label for="pi-input-mname">Middle Name</label>
                <input type="text" name="pi-input-mname" id="pi-input-mname" required="true">
                
                <label for="pi-input-lname">Last Name</label>
                <input type="text" name="pi-input-lname" id="pi-input-lname" required="true">
            </div>

            <div class="rf-ci-form">
                <h2>Contact Information</h2>
                <label for="ci-input-email">Email</label>
                <input type="text" name="ci-input-email" id="ci-input-email" required="true">
    
                <label for="ci-input-number">Phone Number</label>
                <input type="text" name="ci-input-number" id="ci-input-number" required="true">
                
                <label for="ci-input-messenger">Messenger Link</label>
                <input type="text" name="ci-input-messenger" id="ci-input-messenger" required="true">
            </div>

            <div class="rf-si-form">
                <h2>School Information</h2>
                <label for="si-input-cor">COR</label>
                <input type="file" name="si-input-cor" id="si-input-cor" required="true">
            </div>

            <input type="submit" value="Next" name="register-button1" id="register-button1" required="true">

        </form>
    </div>
</body>
</html>