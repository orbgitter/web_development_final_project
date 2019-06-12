<?php
     include('..\dbdonnect.php');

    // Get the data from the form
    $fullName = $_POST["fullName"];
    // $pw = $_POST["password"];

    // validate that this user exists with this password
    // if it is a string, like in fullname please use: '$fullName'
    $query = "INSERT INTO tbl_users_225 (FullName, Password, Birthdate, ...) VALUES ()";
    $result = mysqli_query($connection, $query);

    echo $result;

?>