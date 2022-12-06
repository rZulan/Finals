<?php
define('PAGE_NAME', 'Admin - Users');

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
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="users.css">
    
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
            <th>User ID</th>
            <th>Username</th>
            <th>Full Name</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.users;");
        $stmt->execute([]);
    
        foreach(array_reverse($stmt->fetchAll()) as $user) {
            echo "<tr>";
                echo "<td>" . $user['user_id'] . "</td>";
                echo "<td>" . $user['user_name'] . "</td>";
                echo "<td>" . getUserFullName($SQL_Handle, $user['user_id']) . "</td>";
                echo "<td><a href='edituser.php?edit-user=" . $user['user_id'] . "'>Edit</a></td>";
                echo "<td><a href='deleteuser.php?delete-user=" . $user['user_id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    if(isset($_POST['create-user-button'])) {
        echo "Is Tutor?" . $_POST['is-tutor'];
    }
    ?>
    
    <h1>Create User</h1>
    
    <form action="" method="post">
        <label for="create-username">Username</label>
        <input type="text" name="create-username" id="create-username" placeholder="username">

        <label for="create-password">Password</label>
        <input type="text" name="create-password" id="create-password" placeholder="password">

        <label for="is-tutor">Tutor?</label>
        <input type="radio" name="is-tutor" id="is-tutor-yes" value="yes">
        <label for="is-tutor-yes">Yes</label>
        <input type="radio" name="is-tutor" id="is-tutor-yes" value="no">
        <label for="is-tutor-yes">No</label>

        <input type="submit" value="Create User" name="create-user-button" id="create-user-button">
    </form>
    
    <?php
    if(isset($_POST['is-tutor']) and $_POST['is-tutor'] == 'yes') {
        echo "<form action='' method='post'>";
            echo "<input type='text' name='first-name'>";
        echo "</form>";
    }
    ?>

</body>
</html>