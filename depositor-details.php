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
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="text-center">Username: <?php echo $deopositorDetails["UserName"] . $numOfTransactions ?> </h3>
                    </div>
                </div>
            </div>
        </main>
        <form action="depositor-approved-arrival.php" method="GET">
            <input type="submit" name="Submit Form">
        </form>        
    </div>
</body>
</html>