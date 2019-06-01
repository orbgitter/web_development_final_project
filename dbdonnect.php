<?php

//create a mySQL DB connection:
$dbhost = "182.50.133.168";
$dbuser = "studDB19a";
$dbpass = "stud19DB1!";
$dbname = "studDB19a";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//testing connection success
if(mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}
mysqli_set_charset($connection, "utf8");
//mysqli_close($connection); // Closing Connection


// // Example to show how to query the database and display results
// $query = "SELECT * FROM tbl_users_225";
// $result = mysqli_query($connection, $query);

// while($row = mysqli_fetch_assoc($result)) {
//     echo "<h1>" . $row['Amount'] . "</h1>";
// }