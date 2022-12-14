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
            <li><a href="#stats">Stats</a></li>
            <li><a href="#users">Users</a></li>
            <li><a href="#tutors">Tutors</a></li>
            <li><a href="#sessions">Sessions</a></li>
            <li><a href="#logs">Audit Log</a></li>
            <li><a href="#settings">Website Settings</a></li>
        </ul>
    </div>

    <section id="stats">
        <h1>Stats</h1>
        <hr>
    </section>

    <section id="users">
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
            $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.users(user_name, user_email, user_ip, user_password) VALUES(?, ?, ?, ?);");
            $stmt->execute([$_POST['create-username'], $_POST['create-email'], $_SERVER['REMOTE_ADDR'], password_hash($_POST['create-password'], PASSWORD_BCRYPT)]);

            echo "<meta http-equiv='refresh' content='0'>";
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
    </section>

    <section class="admins">
        <h1>Admins</h1>

        <?php
        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.admins;");
        $stmt->execute([]);

        ?>

        <table class="table">
            <thead class="bg-dark text-light">
                <tr>
                    <th scope="col">Admin ID</th>
                    <th scope="col">Admin User ID</th>
                    <th scope="col">Admin Name</th>
                </tr>
            </thead>

            <tbody>
            <?php
    
            foreach(array_reverse($stmt->fetchAll()) as $i=>$admin) {
                echo "<tr>";
                    echo '<th scope="row">' . $admin['admin_id'] . '</td>';
                    echo '<td>' . $admin['user_id'] . '</td>';
                    echo '<td>' . getUserName($SQL_Handle, $admin['user_id']) . '</td>';
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

        <?php
        if(isset($_POST['add-admin-button'])) {
            $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.admins(user_id) VALUES(?);");
            $stmt->execute([$_POST['add-admin']]);

            echo "<meta http-equiv='refresh' content='0'>";
        }
        ?>

        <h1>Add Admin</h1>

        <form action="" method="post">
            <label for="add-admin">User ID</label>
            <input type="text" name="add-admin" id="add-admin" placeholder="User ID">

            <input type="submit" value="Add Admin" name="add-admin-button" id="add-admin-button">
        </form>
        <hr>
    </section>

    <section id="tutors">
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
    </section>

    <section id="sessions">
        <h1>Sessions</h1>
        <hr>
    </section>

    <section id="logs" style="height: 500px; overflow: scroll;">
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
    </section>

    <section class="settings">
        <h1>Settings</h1>
        <hr>
    </section>

    <section class="courses">
        <h1>Courses</h1>
        <table>
            <thead class="">
                <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course Description</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.courses;");
            $stmt->execute([]);
        
            foreach($stmt->fetchAll() as $course) {
                echo "<tr>";
                    echo '<th scope="row">' . $course['course_id'] . '</td>';
                    echo '<td>' . $course['course_name'] . '</td>';
                    echo '<td>' . $course['course_description'] . '</td>';
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

        <?php
        if(isset($_POST['add-course-button'])) {
            $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.courses(course_name, course_description) VALUES(?, ?);");
            $stmt->execute([$_POST['add-course'], $_POST['add-course-desc']]);

            echo "<meta http-equiv='refresh' content='0'>";
        }
        ?>
        
        <h1>Add Course</h1>
        
        <form action="" method="post">
            <label for="add-course">Course Name</label>
            <input type="text" name="add-course" id="add-course" placeholder="Course Name">

            <label for="add-course-desc">Course Description</label>
            <input type="text" name="add-course-desc" id="add-course-desc" placeholder="Course Description">

            <input type="submit" value="Add Course" name="add-course-button" id="add-course-button">
        </form>
        
        <?php
        if(isset($_POST['is-tutor']) and $_POST['is-tutor'] == 'yes') {
            echo "<form action='' method='post'>";
                echo "<input type='text' name='first-name'>";
            echo "</form>";
        }
        ?>
        <hr>
    </section>
</body>
</html>