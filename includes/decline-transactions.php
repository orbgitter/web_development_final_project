<?php
     include('..\dbconnect.php');

    $transactionId = (int) $_POST["transactionId"];

    $query = "UPDATE tbl_transactions_225 SET State = 2 WHERE Id = $transactionId";
    $resultSet = mysqli_query($connection, $query);

    $result = (object) ['result' => true, 'message' => "Transactions declined successfully"];
    
    echo json_encode($result);
?>