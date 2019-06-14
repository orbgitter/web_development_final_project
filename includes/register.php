<?php
     include('..\dbdonnect.php');

    // Get the data from the form
    $fullName = mysqli_real_escape_string($connection, $_POST["fullName"]);
    $password = $_POST["password"];
    $userName = $_POST["userName"];
    $userId = $_POST["userId"];
    $isDepositor = true;
    $isPuller = true;
    $amount = (int) $_POST["amount"];
    $bankName = $_POST["bankName"];
    $branchNumber = (int) $_POST["branchNumber"];
    $bankAccountNumber = $_POST["bankAccountNumber"];

    // validate that this user exists with this password
    // if it is a string, like in fullname please use: '$fullName'
    $query = "INSERT INTO tbl_users_225 (Id, FullName, Password, UserName, UserId, IsDepositor, IsPuller, Amount, BankName, BranchNumber, BankAccountNumber) VALUES (NULL, '$fullName','$password', '$userName','$userId', $isDepositor, $isPuller, $amount, '$bankName', $branchNumber, '$bankAccountNumber')";
    $result = mysqli_query($connection, $query);

    echo $result;

?>