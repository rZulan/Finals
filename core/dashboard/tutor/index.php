<?php
define('PAGE_NAME', 'Tutor');

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
            <li><a href="#">Tutor Profile</a></li>
            <li><a href="#">Stats</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Schedule</a></li>
            <li><a href="#">Notifications</a></li>
        </ul>
    </div>

    <section class="profile">
        <h1>Tutor Profile</h1>
        <div class="profile-container">
            <div class="name-and-pic">
                <h3>
                    <?=getUserName($SQL_Handle, $_SESSION['user_id'])?>
                </h3>
                <h4>
                    <?=getUserFullName($SQL_Handle, $_SESSION['user_id'])?>
                </h4>
                <img src="/assets/stock/pfp-template.png" alt="" height="100px" width="100px">
            </div>
    
            <div class="subjects-teach">
                
            </div>
        </div>

        <hr>
    </section>

    <section class="notifications">
        <h1>Notifications</h1>

        <?php
        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutor_notifications WHERE tn_tutor = ?;");
        $stmt->execute([getTutorIDFromUserID($SQL_Handle, $_SESSION['user_id'])]);

        ?>

        <table class="table">
            <thead class="bg-dark text-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Message</th>
                    <th scope="col" colspan=2>Response</th>
                </tr>
            </thead>

            <tbody>
            <?php
    
            if($stmt->rowCount()) {
                foreach(array_reverse($stmt->fetchAll()) as $i=>$notification) {
                    echo "<tr>";
                        echo '<th scope="row">' . $i . '</td>';
                        echo '<td>' . $notification['tn_type'] . '</td>';
                        echo '<td>' . $notification['tn_message'] . '</td>';
    
                        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutor_requests WHERE tr_notification = ? LIMIT 1;");
                        $stmt->execute([$notification['tn_id']]);
    
                        $result = $stmt->fetch();
    
                        echo '<td><a href="/core/dashboard/tutor/accept.php?request-id=' . $result['tr_id'] . '">Accept</a></td>';
                        echo '<td><a href="/core/dashboard/tutor/delete.php?request-id=' . $result['tr_id'] . '">Delete</a></td>';
                    echo "</tr>";
                }
            } else {
                echo '<h4>No notifications found.</h4>';
            }
            ?>

            </tbody>
        </table>
        <hr>
    </section>

    <section class="students">
        <h1>Students</h1>

        <?php
        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutor_students WHERE ts_tutor = ?;");
        $stmt->execute([getTutorIDFromUserID($SQL_Handle, $_SESSION['user_id'])]);

        ?>

        <table class="table">
            <thead class="bg-dark text-light">
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Username</th>
                    <th scope="col">Student Full Name</th>
                    <th scope="col">Course</th>
                </tr>
            </thead>

            <tbody>
            <?php
    
            foreach(array_reverse($stmt->fetchAll()) as $i=>$notification) {
                echo "<tr>";
                    echo '<th scope="row">' . $notification['ts_student'] . '</td>';
                    echo '<td>' . getUserName($SQL_Handle, $notification['ts_student']) . '</td>';
                    echo '<td>' . getUserFullName($SQL_Handle, $notification['ts_student']) . '</td>';
                    echo '<td>' . getCourseName($SQL_Handle, $notification['ts_course']) . '</td>';
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

        <?php
        if(isset($_POST['choose-course-button'])) {
            $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.tutor_course(tutor_id, course_id, tc_fee) VALUES(?, ?, ?);");
            $stmt->execute([getTutorIDFromUserID($SQL_Handle, $_SESSION['user_id']), $_POST['choose-course'], $_POST['choose-course-fee']]);
            
            echo "<meta http-equiv='refresh' content='0'>";
        }
        ?>
        
        <h1>Choose Course to Tutor</h1>
        
        <form action="" method="post">
            <label for="choose-course">Username</label>
            <select name="choose-course" id="choose-course">
                <?php
                $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.courses;");
                $stmt->execute([]);

                foreach($stmt->fetchAll() as $course) {
                    echo '<option value="' . $course['course_id'] . '">' . $course['course_name'] . '</option>';
                }
                ?>
            </select>
            <label for="choose-course-fee">How much you want to charge for this course? ₱</label>
            <input type="text" name="choose-course-fee" id="choose-course-fee">
            <input type="submit" value="Submit" name="choose-course-button">
        </form>
    </section>

    <section class="courses">
        <h1>Courses</h1>

        <?php
        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutor_course WHERE tutor_id = ?;");
        $stmt->execute([getTutorIDFromUserID($SQL_Handle, $_SESSION['user_id'])]);

        ?>

        <table class="table">
            <thead class="bg-dark text-light">
                <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Fee</th>
                </tr>
            </thead>

            <tbody>
            <?php
    
            foreach(array_reverse($stmt->fetchAll()) as $i=>$course) {
                echo "<tr>";
                    echo '<th scope="row">' . $course['course_id'] . '</td>';
                    echo '<td>' . getCourseName($SQL_Handle, $course['course_id']) . '</td>';
                    echo '<td>' . ($course['tc_fee'] <= 0 ? "Free" : $course['tc_fee']) . '</td>';
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </section>

</body>
</html>