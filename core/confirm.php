<?php

include('../main.php');
include('../connection/main.php');
include('../utils/checker.php');
include('../utils/getter.php');

if(!isLoggedIn()) {
    header('location: ../../home.php');
}

$stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutor_requests WHERE tr_student = ?;");
$stmt->execute([$_SESSION['user_id']]);

if($stmt->rowCount() AND $stmt->fetch()['tn_tutor'] == $_GET['tutor-id']) {
    header('location: courses.php');
    return;
}

if(isset($_GET['tutor-id']) AND isset($_GET['course-id'])) {
    $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.tutor_notifications(tn_tutor, tn_type, tn_message) VALUES(?, ?, ?);");
    $stmt->execute([$_GET['tutor-id'], "New Student", ("Student Details: <b>Username:</b> " . getUserName($SQL_Handle, $_SESSION['user_id']) . " | <b>Full Name:</b> " . getUserFullName($SQL_Handle, $_SESSION['user_id']) . " | <b>Course:</b> " . getCourseName($SQL_Handle, $_GET['course-id']) . ".")]);

    $stmt = $SQL_Handle->prepare("INSERT INTO learnpp.tutor_requests(tr_tutor, tr_course, tr_student, tr_notification) VALUES(?, ?, ?, ?);");
    $stmt->execute([$_GET['tutor-id'], $_GET['course-id'], $_SESSION['user_id'], $SQL_Handle->lastInsertId()]);

    header('location: courses.php');
}