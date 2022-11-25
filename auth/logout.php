<?php
include('../main.php');

if(isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    session_destroy();

    header('location:../../../core/home.php');
} else {
    header('location:../../../core/home.php');
}