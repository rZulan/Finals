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

    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <div class="registration-form">
        <?php
        include('../../../parts/logo.php');

        if(isset($_POST['register-button1'])) {
            $_SESSION['fortutor'] = false;

            $_SESSION['student-cor'] = $_POST['si-input-cor'];
            header('location: ../account.php');
        }
        
        ?>

        <form action="" method="post">
            <div class="rf-si-form">
                <h2>School Information</h2>
                <label for="si-input-cor">COR</label>
                <input type="file" name="si-input-cor" id="si-input-cor" required="true">
            </div>

            <input type="submit" value="Next" name="register-button1" id="register-button1">
        </form>
    </div>
</body>
</html>