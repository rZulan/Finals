<?php
define('PAGE_NAME', 'Course');

include('../main.php');
include('../connection/main.php');
include('../utils/checker.php');
include('../utils/getter.php');

if(!isset($_GET['course-id'])) {
    header('location: courses.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="course.css">
    
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <title><?=BRAND_NAME . ' | ' . PAGE_NAME?></title>
</head>
<body>
    <?php
    include('../parts/nav.php');
    ?>

    <?php

    $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.courses WHERE course_id = ?;");
    $stmt->execute([$_GET['course-id']]);

    $result = $stmt->fetch();
    echo '<h1> ' . $result['course_name'] . '</h1>';
    echo '<p> ' . $result['course_description'] . '</p>';
    
    $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutor_course WHERE course_id = ?;");
    $stmt->execute([$_GET['course-id']]);

    if($stmt->rowCount()) {
        echo '<div class="course-tutors">';
        echo '<h2>Tutors</h2>';
        foreach($stmt->fetchAll() as $tutorcourse) {
            echo '<div class="course-tutor" style="border: 1px solid black";>';
            $stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutors WHERE tutor_id = ?;");
            $stmt->execute([$tutorcourse['tutor_id']]);
    
            $result = $stmt->fetch();
            
            echo getUserName($SQL_Handle, $result['user_id']);
            echo getUserFullName($SQL_Handle, $result['user_id']);
            echo '<a href="#">Choose Tutor</a>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "No tutors available for this course.";
    }
    ?>
        
    </div>
</body>
</html>