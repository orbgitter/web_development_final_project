<?php
     include('..\dbconnect.php');

    $depositorId = (int) $_POST["depositorId"];
    $pullerId = (int) $_POST["pullerId"];
    $transactionDate = new DateTime();
    $amount = (int) $_POST["amount"];
    $state = 0;
    $generatedPassword =  $_POST["generatedPassword"];

    $query = "INSERT INTO tbl_transactions_225 (Id, DepositorId, PullerId, TransactionDate, Amount, state, GeneratedPassword) VALUES (NULL, $depositorId, $pullerId, CURDATE(), $amount, $state, '$generatedPassword')";
    $result = mysqli_query($connection, $query);

    $result = (object) ['result' => true, 'message' => "Transaction started successfully", 'generatedPassword' => $generatedPassword];
    
    echo json_encode($result);
?>