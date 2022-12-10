<?php
define('PAGE_NAME', 'Login - Forgot Password');

include('../../main.php');
include('../../connection/main.php');

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
    if(isset($_POST['get-code'])) {
        // Specify the sender, recipient, subject, and message of the email
        $from = "roi.zulan@gmail.com";
        $to = $_POST['fp-email'];
        $subject = "Hello";
        $message = "Hello, world!";

        // Use the mail() function to send the email
        mail($to, $subject, $message, "From: $from");
    }
    ?>
    
    <form action="" method="post">
        <input type="email" name="fp-email" id="fp-email">
        <input type="submit" value="Get Code" name="get-code">
        <input type="date" name="" id="">
    </form>
</body>
</html>