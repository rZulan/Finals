<?php

function getUserID($handle, $username) {
    $stmt = $handle->prepare("SELECT user_id FROM learnpp.users WHERE user_name = ?;");
    $stmt->execute([$username]);

    if($stmt->rowCount()) {
        return -1;
    }

    $result = $stmt->fetch();

    return $result['user_id'];
}