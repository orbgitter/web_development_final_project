<?php
    include(getcwd() . '\includes\session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="includes/3rd_parties/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
    <link rel="stylesheet" href="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.css"></script>
    <script src="includes/3rd_parties/jquery-3.4.1.min.js"></script>
    <script src="includes/3rd_parties/bootstrap.min.js"></script>
    <script src="includes/withdrawal.js"></script>
    <script src="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="includes/stylesheet.css">
    <title>Papel</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Lavado De Papel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item isActiveDespositorToggle">
                            <input id="isActiveDepositorToggleBtn" type="checkbox" data-toggle="toggle">
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="depositor-list.php">Widthraw<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">History <span class="fas fas-factory"></span></a>
                        </li>
                        <li class="nav-item">
                            <!-- If user is registered - display Log Out button; Otherwise - Display Create Account-->
                            <a class="nav-link" href="create-account.php">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="includes/logout.php">Log Out</a>
                        </li>
                        <li class="nav-item">
                            <h2 class="sumOfCash" href="#">₪</h2>
                        </li>
                        <li class="nav-item">
                            <a id="userPic" href="#"></a>
                        </li>
                    </ul>
                </div>
            </nav>          
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="text-center">Withdrawal</h3>
                    </div>
                </div>
                <div class="row">
                    <ul class="upperside">

                        <form name="myForm" action="http://html5-book.co.il/teach/forms/get_form2.php" method="GET" autocomplete="on">
                            <label>Demanding sum: <input name="fullName"></label>
                            <br><br>
                            <br><br>
                            <label>Up to deviation of: </label> <input type="number" name="tech" value="2" min="2" max="60" step="2" > 
                            &nbsp &nbsp include interest: <input type="checkbox" name="hobbies" value="Reading Books"><br>
                                <br><br>
                                <br><br>
                        </form>
                    </ul>
                </div>
                <div class="row">
                    <table id="contributesTable" class="table table-striped" onclick="location.href='depositor-details.php'">
                        <thead>
                          <tr>
                            <th scope="col">Depositor</th>
                            <th scope="col">Include interest</th>
                            <th scope="col">Offering sum</th>
                            <th scope="col">Distance (Meters)</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                $id = $userDetails['Id'];
                                $query = "SELECT * FROM tbl_users_225 WHERE Id != $id  AND IsDepositor = 1";
                                $result = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr><td>" .  $row["FullName"] . "</td>";
                                    echo "<td>" . "REPLACE_ME" . "</td>";
                                    echo "<td>" . "REPLACE_ME" . "</td>";
                                    echo "<td>" . rand(50, 300) . "</td></tr>";
                                }
                            ?>
                        </tbody>
                      </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>