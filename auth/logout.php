<?php
include('../main.php');
include('../connection/main.php');
include('../utils/checker.php');
include('../utils/getter.php');
include('../utils/logger.php');

if(isLoggedIn()) {
    logTrail($SQL_Handle, LOGTRAIL_AUTH, ("User [" . $_SESSION['user_id'] . "] " . getUserName($SQL_Handle, $_SESSION['user_id']) ." just logged out."));
    
    unset($_SESSION['user_id']);
    session_destroy();

    header('location:../../../core/home.php');
} else {
    header('location:../../../core/home.php');
}