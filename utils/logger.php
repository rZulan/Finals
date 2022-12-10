<?php

define('LOGTRAIL_AUTH', 1);
define('LOGTRAIL_ADMIN', 2);
define('LOGTRAIL_USER', 3);
define('LOGTRAIL_TUTOR', 4);

function logTrail($handle, $logtype, $logmessage) {
    $stmt = $handle->prepare("INSERT INTO learnpp.logs(log_type, log_message) VALUES(?, ?);");
    
    switch($logtype) {
        case LOGTRAIL_AUTH: {
            $stmt->execute(['Authentication', $logmessage]);
            break;
        }
    }
}