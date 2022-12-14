<?php
include('../../../main.php');
include('../../../connection/main.php');
include('../../../utils/checker.php');
include('../../../utils/getter.php');

$stmt = $SQL_Handle->prepare("SELECT * FROM learnpp.tutor_requests WHERE tr_id = ?;");
$stmt->execute([$_GET['request-id']]);

$result = $stmt->fetch();

$stmt = $SQL_Handle->prepare("INSERT INTO learnpp.tutor_students(ts_tutor, ts_student, ts_course) VALUES(?, ?, ?);");
$stmt->execute([$result['tr_tutor'], $result['tr_student'], $result['tr_course']]);

header('location: index.php');

