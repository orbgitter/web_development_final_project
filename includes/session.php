<?php
    include('..\dbdonnect.php');
    session_start();
    $userDetails = NULL;
    if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] == -1) {
        header("location: login.html");
    }
    // else {
    //     $userId = $_SESSION['user_id'];
    //     $query = "SELECT * FROM tbl_users_225 WHERE UserId = '$userId'";
    //     $result = mysqli_query($connection, $query);
    //     $userDetails = mysqli_fetch_assoc($result);
    // }
?>