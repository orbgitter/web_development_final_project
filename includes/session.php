<?php
    include(getcwd() . '\dbdonnect.php');

    session_start();
    $userDetails = NULL;
    if(!isset($_SESSION['id']) || $_SESSION['id'] == -1) {
        header("location: login.html");
    }
    else {
        $id = $_SESSION['id'];
        $query = "SELECT * FROM tbl_users_225 WHERE Id = $id LIMIT 1";
        $result = mysqli_query($connection, $query);
        $userDetails = mysqli_fetch_assoc($result);
    }
?>