<?php
define('PAGE_NAME', 'Admin - Audit Logs');

include('../../../main.php');
include('../../../connection/main.php');
include('../../../utils/checker.php');
include('../../../utils/getter.php');

if(!isLoggedIn()) {
    header('location: ../../../../../auth/login/login.php');
}

if(!isAdmin($SQL_Handle, $_SESSION['user_id'])) {
    header('location: ../../../../../core/home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="logs.css">
    
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../../../parts/nav.php');
    include('../../../parts/sidebar.php');
    include('dboptions.php');
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Message</th>
            <th>Date</th>
        </tr>

        <?php
        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.logs;");
        $stmt->execute([]);
    
        foreach(array_reverse($stmt->fetchAll()) as $log) {
            echo "<tr>";
                echo "<td>" . $log['log_id'] . "</td>";
                echo "<td>" . $log['log_type'] . "</td>";
                echo "<td>" . $log['log_message'] . "</td>";
                echo "<td>" . $log['log_date'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>