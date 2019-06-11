<?php
     include(getcwd() . '\dbdonnect.php');

    // Get the data from the form
    $un = $_POST["username"];
    $pw = $_POST["password"];

    // validate that this user exists with this password
    $query = "SELECT * FROM tbl_users_225 WHERE UserName =  '$un' AND Password = '$pw'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
//     echo "<h1>" . $row['Id'] . "</h1>";
// // while($row = mysqli_fetch_assoc($result)) {
// //     echo "<h1>" . $row['Amount'] . "</h1>";
// // }

//     if ($un == "yonit" && $pw == "111")
//         echo "<h2> Good morning user " . $un . "</h2>";
//     else
//         echo "<h2> Who are you? you can't get in </h2>"


    if($result->num_rows != 0) {
        session_start();
        $_SESSION['user_id'] = $row['UserId'];
    }
    echo json_encode($row);

?>