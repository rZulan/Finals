<?php
define('PAGE_NAME', 'Courses');

include('../main.php');
include('../connection/main.php');
include('../utils/checker.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="courses.css">
    
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../parts/nav.php');
    ?>
    
    <div class="login-warning">
        <p><b>Warning:</b> You have to sign in to interact <span><a href="/auth/login/login.php">Login >>></a></span></p>
    </div>

    <div class="all-courses">
        <?php
        $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.courses;");
        $stmt->execute([]);

        foreach($stmt->fetchAll() as $course) {
            $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutor_course WHERE course_id = ?;");
            $stmt->execute([$course['course_id']]);

            $tutors = $stmt->rowCount();

            echo '
                <div class="course" style="border: 1px solid black; height: 200px;">
                <h1>' . $course['course_name'] . '</h1>
                <a href="course.php?course-id=' . $course['course_id'] . '">View Course</a>
                <p>Available Tutors: ' . $tutors . '</p>
                </div>
            ';
        }
        ?>
        
    </div>
</body>
</html>