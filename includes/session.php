<?php
    session_start();
    $userDetails = NULL;
    if(!isset($_SESSION['id']) || $_SESSION['id'] == -1) {
        header("location: login.html");
    }
?>