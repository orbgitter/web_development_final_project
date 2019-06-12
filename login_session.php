<?php
     include(getcwd() . '\dbdonnect.php');

    // Get the data from the form
    $un = $_POST["username"];
    $pw = $_POST["password"];

    // validate that this user exists with this password
    $query = "SELECT * FROM tbl_users_225 WHERE UserName =  '$un' AND Password = '$pw'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    if($result->num_rows != 0) {
        session_start();
        $_SESSION['user_id'] = $row['UserId'];
    }
    echo json_encode($row);

?>