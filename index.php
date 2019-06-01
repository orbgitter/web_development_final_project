<?php
    include(getcwd() . '\dbdonnect.php');
?>

<!DOCTYPE html>
<html>
<!-- meta data -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, use-scalable=0">
    <link rel="stylesheet" type="text/css" href="includes/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
    <!-- <link rel="stylesheet" type="text/css" href="includes/fontawesome-5.8.2.css"> -->
    <link rel="stylesheet" href="includes/bootstrap-toggle/bootstrap-toggle.min.css"></script>

    <script src="includes/jquery-3.4.1.min.js"></script>
    <script src="includes/bootstrap.min.js"></script>
    <script src="includes/scripts.js"></script>
    <script src="includes/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Lavado De Papel</title>
</head>
<body id="">
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
                            <a class="nav-link" href="Withdrawal.html">Widthraw<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">History <span class="fas fas-factory"></span></a>
                        </li>
                        <li class="nav-item">
                            <!-- If user is registered - display Log Out button; Otherwise - Display Create Account-->
                            <a class="nav-link" href="create-account.html">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log Out</a>
                        </li>
                        <li class="nav-item">
                                <h2 class="sumOfCash" href="#">₪
                                    <?php
                                        $query = "SELECT * FROM tbl_users_225";
                                        $result = mysqli_query($connection, $query);

                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo $row['Amount'];
                                        }
                                    ?>
                                </h2>
                        </li>
                        <li class="nav-item">
                            <a id="userPic" href="#"></a>
                        </li>
                        </ul>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="text-center">Choosing a role</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <a class="btn btn-primary btn-block mainActionBtn" href="#">Depositor</a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <a class="btn btn-secondary btn-block mainActionBtn" href="Withdrawal.html">Puller</a>
                    </div> 
            </div>
    </main>
</body>
</html>