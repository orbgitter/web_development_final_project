<?php
     include('..\dbdonnect.php');

    $isNewUser = $_POST['newUser'] === 'true';

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
    $query = null;
    if($isNewUser) {

        $validationQuery = "SELECT * FROM tbl_users_225 WHERE UserName = '$userName' LIMIT 1";
        $result = mysqli_query($connection, $validationQuery);
        if($result->num_rows != 0) {
            $result = (object) ['result' => false, 'message' => "Username is already exists"];
            echo json_encode($result);
            return;
        }

        else {
            $query = "INSERT INTO tbl_users_225 (Id, FullName, Password, UserName, UserId, IsDepositor, IsPuller, Amount, BankName, BranchNumber, BankAccountNumber) VALUES (NULL, '$fullName','$password', '$userName','$userId', $isDepositor, $isPuller, $amount, '$bankName', $branchNumber, '$bankAccountNumber')";
        }
    }
    else {
        session_start();
        if(isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $query = "UPDATE tbl_users_225 SET FullName = '$fullName', Password = '$password', IsDepositor = $isDepositor, IsPuller = $isPuller, Amount = $amount, BankName = '$bankName', BranchNumber = $branchNumber, BankAccountNumber = '$bankAccountNumber' WHERE Id = $id";
        }
    }
    // "UPDATE tbl_221_tickets SET is_sold=1, bought_date='$bought_date', bought_by=$user_id WHERE id=$ticket_id";

    mysqli_query($connection, $query);

    $result = (object) ['result' => true, 'message' => "User details saved"];
    
    echo json_encode($result);
?>