

<!DOCTYPE html>
<html>
<!-- meta data -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, use-scalable=0">
    <link rel="stylesheet" type="text/css" href="includes/3rd_parties/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
    <link rel="stylesheet" href="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.css">
    <script src="includes/3rd_parties/jquery-3.4.1.min.js"></script>
    <script src="includes/3rd_parties/bootstrap.min.js"></script>
    <script src="includes/scripts.js"></script>
    <script src="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.js"></script>
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
                            <h2 class="sumOfCash" href="#">₪50,000,000</h2>
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
                        <h3 class="text-center">Password generating</h3>
                    </div>
                </div>
                <form id="phpReturnedRequestForm">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="phpEcho" class="col-sm-12 col-form-label">
                                <?php echo "Dear user, your request has successfully accepted";?>
                            </label>             
                        </div>
                    </div>
                </form>

                
                <div class="form-group row">
                        <label for="refreshHashcode" class="col-sm-2 col-form-label"><button id="generatorHashcodeBtn" class="fa fa-refresh"></i></button></label>
                        <div class="col-sm-10">
                            <span id="hashCodePlaceHolder" class="fa" name ></span>
                        </div>         
                </div>
                </div>
            </div>
        </main>
</body>
</html>







    </section>
</body>
</html>