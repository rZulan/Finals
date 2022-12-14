<?php
// --- Getting User ID ---

function getUserID($handle, $username) {
    $stmt = $handle->prepare("SELECT user_id FROM learnpp.users WHERE user_name = ? LIMIT 1;");
    $stmt->execute([$username]);

    if($stmt->rowCount()) {
        return -1;
    }

    return $stmt->fetch()['user_id'];
}

function getTutorUserID($handle, $tutorid) {
    $stmt = $handle->prepare("SELECT user_id FROM learnpp.tutors WHERE tutor_id = ? LIMIT 1;");
    $stmt->execute([$tutorid]);

    return $stmt->fetch()['user_id'];
}

function getTutorIDFromUserID($handle, $userid) {
    $stmt = $handle->prepare("SELECT tutor_id FROM learnpp.tutors WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['tutor_id'];
}


// --- Getting User Information ---

function getUserName($handle, $userid) {
    $stmt = $handle->prepare("SELECT user_name FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['user_name'];
}

function getUserFullName($handle, $userid) {
    $stmt = $handle->prepare("SELECT user_fname, user_mname, user_lname FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    $result = $stmt->fetch();
    $fullName = $result['user_fname'] . ' ' . $result['user_mname'] . ' ' . $result['user_lname'];

    return $fullName;
}

function getUserFirstName($handle, $userid) {
    $stmt = $handle->prepare("SELECT user_fname FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['user_fname'];
}

function getUserMiddleName($handle, $userid) {
    $stmt = $handle->prepare("SELECT user_mname FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['user_mname'];
}

function getUserLastName($handle, $userid) {
    $stmt = $handle->prepare("SELECT user_lname FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['user_lname'];
}

function getUserContactEmail($handle, $userid) {
    $stmt = $handle->prepare("SELECT user_cemail FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['user_cemail'];
}

function getUserEmail($handle, $userid) {
    $stmt = $handle->prepare("SELECT user_email FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['user_email'];
}

function getUserPhone($handle, $userid) {
    $stmt = $handle->prepare("SELECT user_phone FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['user_phone'];
}

function getUserMessenger($handle, $userid) {
    $stmt = $handle->prepare("SELECT user_messenger FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['user_messenger'];
}

function getUserBalance($handle, $userid) {
    $stmt = $handle->prepare("SELECT user_balance FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['user_balance'];
}


// --- Getting Admin Information

function getAdminLevel($handle, $userid) {
    if(!isAdmin($handle, $userid)) {
        return 0;
    }
    
    $stmt = $handle->prepare("SELECT admin_level FROM learnpp.users WHERE user_id = ? LIMIT 1;");
    $stmt->execute([$userid]);

    return $stmt->fetch()['admin_level'];
}


// --- Getting Tutor Information


// --- Getting Course Information

function getCourseName($handle, $courseid) {
    $stmt = $handle->prepare("SELECT course_name FROM learnpp.courses WHERE course_id = ? LIMIT 1;");
    $stmt->execute([$courseid]);

    return $stmt->fetch()['course_name'];
}


// --- Getting Course Information

function getTCID($handle, $courseid) {
    $stmt = $handle->prepare("SELECT tc_id FROM learnpp.tutor_course WHERE course_id = ? LIMIT 1;");
    $stmt->execute([$courseid]);

    return $stmt->fetch()['tc_id'];
}

function getTCFee($handle, $tcid) {
    $stmt = $handle->prepare("SELECT tc_fee FROM learnpp.tutor_course WHERE tc_id = ? LIMIT 1;");
    $stmt->execute([$tcid]);

    if($stmt->fetch()['tc_fee'] <= 0) {
        return "Free";
    }

    return $stmt->fetch()['tc_fee'];
}