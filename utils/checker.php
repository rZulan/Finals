<?php

function hasAccount($handle, $username) {
    $stmt = $handle->prepare("SELECT * FROM learnpp.users WHERE user_name = ?;");
    $stmt->execute([$username]);

    if($stmt->rowCount()) {
        return true;
    }

    return false;
}

function hasAccount2($handle, $userid) {
    $stmt = $handle->prepare("SELECT * FROM learnpp.users WHERE user_id = ?;");
    $stmt->execute([$userid]);

    if($stmt->rowCount()) {
        return true;
    }

    return false;
}

function isLoggedIn() {
    if(isset($_SESSION['user_id'])) {
        return true;
    }
    return false;
}

function isTutor($handle, $userid) {
    if(!isLoggedIn()) {
        return false;
    }

    $stmt = $handle->prepare("SELECT * FROM learnpp.tutors WHERE user_id = ?;");
    $stmt->execute([$userid]);

    if($stmt->rowCount()) {
        return true;
    }

    return false;
}

function isAdmin($handle, $userid) {
    if(!isLoggedIn()) {
        return false;
    }

    $stmt = $handle->prepare("SELECT * FROM learnpp.admins WHERE user_id = ?;");
    $stmt->execute([$userid]);

    if($stmt->rowCount()) {
        return true;
    }

    return false;
}
