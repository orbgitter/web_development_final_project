<?php
     include('..\dbconnect.php');

    $transactionId = (int) $_POST["transactionId"];

    $transactionQuery = "SELECT * FROM tbl_transactions_225 WHERE Id = $transactionId LIMIT 1";
    $result = mysqli_query($connection, $transactionQuery);
    $transactionDetails = mysqli_fetch_assoc($result);

    $afterIntrests = $transactionDetails["Amount"] * 1.05;
    $depositorId = (int) $transactionDetails['DepositorId'];
    $pullerId = (int) $transactionDetails['PullerId'];

    $usersQuery = "UPDATE tbl_users_225 SET Amount = Amount + $afterIntrests WHERE Id = $depositorId";
    $resultSet = mysqli_query($connection, $usersQuery);

    $usersQuery = "UPDATE tbl_users_225 SET Amount = Amount - $afterIntrests WHERE Id = $pullerId";
    $resultSet = mysqli_query($connection, $usersQuery);

    $transactionQuery = "UPDATE tbl_transactions_225 SET State = 1 WHERE Id = $transactionId";
    $resultSet = mysqli_query($connection, $transactionQuery);

    $result = (object) ['result' => true, 'message' => "Transactions applied successfully"];
    
    echo json_encode($result);
?>