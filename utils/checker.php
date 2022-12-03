<?php

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
