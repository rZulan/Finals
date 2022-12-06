<?php
include('../main.php');
include('../connection/main.php');
include('../utils/checker.php');

if(isLoggedIn()) {
    unset($_SESSION['user_id']);
    session_destroy();

    header('location:../../../core/home.php');
} else {
    header('location:../../../core/home.php');
}