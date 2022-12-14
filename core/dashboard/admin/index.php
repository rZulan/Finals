<?php
define('PAGE_NAME', 'Admin');

include('../../../main.php');
include('../../../connection/main.php');
include('../../../utils/checker.php');
include('../../../utils/getter.php');

if(isLoggedIn() and !hasAccount2($SQL_Handle, $_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    header('location: ../../../../../auth/login/login.php');
}

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
    
    <link rel="stylesheet" href="/style.css">

    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../../../parts/nav.php');
    include('../../../parts/sidebar.php');
    ?>

    <div class="db-options">
        <ul>
            <li><a href="#stats-section">Stats</a></li>
            <li><a href="#users-section">Users</a></li>
            <li><a href="#tutors-section">Tutors</a></li>
            <li><a href="#sessions-section">Sessions</a></li>
            <li><a href="#logs-section">Audit Log</a></li>
            <li><a href="#settings-section">Website Settings</a></li>
        </ul>
    </div>

    <div id="stats-section">
        <h1>Stats</h1>
        <hr>
    </div>
    <div id="users-section">
        <h1>Users</h1>
        <table>
            <thead class="">
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Full Name</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.users;");
            $stmt->execute([]);
        
            foreach(array_reverse($stmt->fetchAll()) as $user) {
                echo "<tr>";
                    echo '<th scope="row">' . $user['user_id'] . '</td>';
                    echo '<td>' . $user['user_name'] . '</td>';
                    echo '<td>' . getUserFullName($SQL_Handle, $user['user_id']) . '</td>';
                    echo '<td><a href="/core/dashboard/admin/edituser.php?edit-user=' . $user['user_id'] . '">Edit</a></td>';
                    echo '<td><a href="/core/dashboard/admin/deleteuser.php?delete-user=' . $user['user_id'] . '">Delete</a></td>';
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

        <?php
        if(isset($_POST['create-user-button'])) {
            $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.users(user_name, user_email, user_password) VALUES(?, ?, ?);");
            $stmt->execute([$_POST['create-username'], $_POST['create-email'], password_hash($_POST['create-password'], PASSWORD_BCRYPT)]);

            header('location: users.php');
        }
        ?>
        
        <h1>Create User</h1>
        
        <form action="" method="post">
            <label for="create-username">Username</label>
            <input type="text" name="create-username" id="create-username" placeholder="username">

            <label for="create-email">E-Mail</label>
            <input type="text" name="create-email" id="create-email" placeholder="E-Mail">

            <label for="create-password">Password</label>
            <input type="text" name="create-password" id="create-password" placeholder="password">

            <input type="submit" value="Create User" name="create-user-button" id="create-user-button">
        </form>
        
        <?php
        if(isset($_POST['is-tutor']) and $_POST['is-tutor'] == 'yes') {
            echo "<form action='' method='post'>";
                echo "<input type='text' name='first-name'>";
            echo "</form>";
        }
        ?>
        <hr>
    </div>

    <div id="tutors-section">
        <h1>Tutors</h1>
        <table>
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Full Name</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutors;");
            $stmt->execute([]);
        
            foreach(array_reverse($stmt->fetchAll()) as $tutor) {
                echo "<tr>";
                    echo '<th scope="row">' . $tutor['user_id'] . '</td>';
                    echo '<td>' . getUserName($SQL_Handle, $tutor['user_id']) . '</td>';
                    echo '<td>' . getUserFullName($SQL_Handle, $tutor['user_id']) . '</td>';
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <hr>
    </div>

    <div id="sessions-section">
        <h1>Sessions</h1>
        <hr>
    </div>

    <div id="logs-section" style="height: 500px; overflow: scroll;">
        <h1>Audit Log</h1>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.logs;");
            $stmt->execute([]);
        
            foreach(array_reverse($stmt->fetchAll()) as $log) {
                echo "<tr>";
                    echo '<th scope="row">' . $log['log_id'] . '</td>';
                    echo '<td>' . $log['log_type'] . '</td>';
                    echo '<td>' . $log['log_message'] . '</td>';
                    echo '<td>' . $log['log_date'] . '</td>';
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <hr>
    </div>

    <div class="settings-section">
        <h1>Settings</h1>
        <hr>
    </div>
</body>
</html>