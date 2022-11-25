<?php

function isLoggedIn() {
    if(isset($_SESSION['user_id'])) {
        return true;
    }
    return false;
}