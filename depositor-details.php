<?php
    include(getcwd() . '\includes\session.php');

    if(isset($_GET["username"])) {
        $username = $_GET["username"];
        $query = "SELECT * FROM tbl_users_225 WHERE UserName = '$username' LIMIT 1";
        $result = mysqli_query($connection, $query);
        $deopositorDetails = mysqli_fetch_assoc($result);
        
        // Get the number of deposits
        $depositorId = $deopositorDetails['Id'];
        $queryCount = "SELECT COUNT(*) AS sum  FROM tbl_transactions_225 WHERE DepositorId = $depositorId";
        $result = mysqli_query($connection, $queryCount);
        $row = mysqli_fetch_assoc($result);
        $numOfTransactions = $row['sum'];
    }
    else {
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="includes/UserDetails.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="includes/3rd_parties/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
    <script src="includes/3rd_parties/jquery-3.4.1.min.js"></script>
    <script src="includes/3rd_parties/bootstrap.min.js"></script>
    <script src="includes/utils.js"></script>
    <script src="includes/transactions.js"></script>
    <script src="includes/scripts.js"></script>
    <title>Papel</title>
</head>
<body>
    <div id="wrapper2">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Lavado De Papel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="depositor-list.php">Widthraw<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="puller-list.php">Depositing<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">History <span class="fas fas-factory"></span></a>
                        </li>
                        <li class="nav-item">
                            <!-- If user is registered - display Log Out button; Otherwise - Display Create Account-->
                            <a class="nav-link" href="account-details.php">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="includes/logout.php">Log Out</a>
                        </li>
                        <li class="nav-item">
                        <h2 class="sumOfCash" href="#">₪
                                <?php
                                    echo $userDetails["Amount"];
                                    echo substr($userDetails["FullName"], 0, strpos($userDetails["FullName"], ' '));
                                ?>
                            </h2>
                        </li>
                    </ul>
                </div>
            </nav>            
        </header>

        <main id="userDetails">
            <div class="userDetailsUp">
                <div class="userDetailsUserName">
                    <div class="col-12 text-center">
                        <h3 class="text-center"><?php echo $deopositorDetails["UserName"] ?> </h3>
                    </div>
                </div>
                <a id="userDetailsHeadline"></a>
                <ul class="userDetailsList" >
                    <li class="userDetailsList"><a style="margin-left=10%;">num of deposits: </a><?php echo $numOfTransactions ?></li>
                    <li class="userDetailsList"><a style="margin-left=10%;">num of withdraw: 10</a></li>
                    <li class="userDetailsList"><a style="margin-left=10%;">Arrival speed: fast</a></li>
                    <li class="userDetailsList">
                        <a class="userDetailsRank" style="float: right"></a>
                        <a style="margin-left=10%;">application's grade: </a>
                    </li>
                    <li class="userDetailsList">
                        <a class="userDetailsRank" style="float: right"></a>
                        <a style="margin-left=10%;">users's grade: </a>
                    </li> 
                    <li class="userDetailsList"><a style="margin-left=10%;">users said: </a></li>
                </ul>
            </div>

            
            
            <div class="userDetailsDown">
                <li class="userDetailsList2" style="background-color: #CF868B">
                    <a class="userDetailsFace"></a>
                    <a class="userDetailsA1">01/01/2001</a>
                    <a class="userDetailsA2" style="float: right;"></a>
                    <p class="userDetailsParagraphDiv">very nice</p>
                </li>
                <li class="userDetailsList2">
                    <a class="userDetailsFace"></a>
                    <a class="userDetailsA1">01/01/2001</a>
                    <a class="userDetailsA2" style="float: right;"></a>
                    <p class="userDetailsParagraphDiv">very nice</p>
                </li>
                <li class="userDetailsList2" style="background-color: #CF868B">
                    <a class="userDetailsFace"></a>
                    <a class="userDetailsA1">01/01/2001</a>
                    <a class="userDetailsA2" style="float: right;"></a>
                    <p class="userDetailsParagraphDiv">very nice</p>
                </li>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block mainActionBtn text-center" <?php echo "onclick='onStartTransaction(" . $userDetails["Id"] . "," . $deopositorDetails["Id"] . "," . $deopositorDetails["AmountToDeposit"] . "," . "\"" . $deopositorDetails["UserName"] . "\"" . ")'" ?>>Submit</button>
                    </div>
                </div>           
            </div>
        </main>
        <main id="successfullTransaction">
            <div class="alert alert-success">
                <strong>Success!</strong> <span id="successfullTransactionMsg"></span>
            </div>
        </main>
    </div>
</body>
</html>