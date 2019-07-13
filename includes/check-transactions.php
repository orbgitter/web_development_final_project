<?php
     include('..\dbconnect.php');

    $userId = (int) $_POST["userId"];

    // $query = "SELECT * FROM tbl_transactions_225 WHERE State = 0 AND (DepositorId = $userId OR PullerId = $userId)";
    $query = "SELECT *, Transactions.Id as TransactionId FROM tbl_transactions_225 AS Transactions INNER JOIN tbl_users_225 AS Users ON Users.Id = Transactions.PullerId WHERE State = 0 AND (PullerId = $userId OR DepositorId = $userId)";
    $resultSet = mysqli_query($connection, $query);

    $result = (object) ['result' => true, 'message' => "Transactions loaded successfully", 'transactions' => mysqli_fetch_all($resultSet,MYSQLI_ASSOC)];
    
    echo json_encode($result);
?>