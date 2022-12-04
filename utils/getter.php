<?php

function getUserID($handle, $username) {
    $stmt = $handle->prepare("SELECT user_id FROM learnpp.users WHERE user_name = ?;");
    $stmt->execute([$username]);

    if($stmt->rowCount()) {
        return -1;
    }

    return $stmt->fetch()['user_id'];
}

function getUserName($handle) {
    $stmt = $handle->prepare("SELECT user_name FROM learnpp.users WHERE user_id = ?;");
    $stmt->execute([$_SESSION['user_id']]);

    return $stmt->fetch()['user_name'];
}

function getUserFullName($handle) {
    $stmt = $handle->prepare("SELECT user_fname, user_mname, user_lname FROM learnpp.users WHERE user_id = ?;");
    $stmt->execute([$_SESSION['user_id']]);

    $result = $stmt->fetch();
    $fullName = $result['user_fname'] . ' ' . $result['user_mname'] . ' ' . $result['user_lname'];

    return $fullName;
}