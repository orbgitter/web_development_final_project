<!DOCTYPE html>
<html>
<!-- meta data -->
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="includes/3rd_parties/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="includes/3rd_parties/datepicker-bootstrap/css/datepicker.css">
    <link rel="stylesheet" href="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="includes/3rd_parties/jquery-3.4.1.min.js"></script>
    <script src="includes/3rd_parties/bootstrap.min.js"></script>
    <script src="includes/3rd_parties/datepicker-bootstrap/js/bootstrap-datepicker.js"></script>
    <script src="includes/utils.js"></script>
    <script src="includes/create-account.js"></script>
    <title>Lavado De Papel - Create Account</title>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="Withdrawal.html">Widthraw<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                                <a class="nav-link" href="#">Deposite<span class="sr-only"></span></a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">History <span class="fas fas-factory"></span></a>
                        </li>
                        <li class="nav-item">
                            <!-- If user is registered - display Log Out button; Otherwise - Display Create Account-->
                            <a class="nav-link" href="#">Account<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="text-center">Create New Account</h3>
                    </div>
                </div>
                <form id="createAccountForm">
                    
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-2 col-form-label">First Name:</label>
                        <div class="col-sm-6">
                            <input required type="text" name="firstName" class="form-control" id="firstName" placeholder="Insert First Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastName" class="col-sm-2 col-form-label">Last Name:</label>
                        <div class="col-sm-6">
                            <input required type="text" name="lastName" class="form-control" id="lastName" placeholder="Insert Last Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthdate" class="col-sm-2 col-form-label">Birth Date:</label>
                        <div class="col-sm-6">
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" name="birthdate" id="birthdate" class="form-control" data-date-format="mm/dd/yyyy">
                                    <div class="input-group-addon">
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-group row">
                        <label for="userName" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-6">
                            <input required type="text" name="userName" class="form-control" pattern="[0-9]{9}" id="userId" maxlength="9" placeholder="Insert ID Number (9 Digits)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input required type="password" name="password" class="form-control" id="password" maxlength="32" placeholder="Insert a password">
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="BankName" class="col-sm-2 col-form-label">Bank's Name</label>
                            <div class="col-sm-6">
                                <input required type="text" class="form-control" name="bankName" id="bankName" placeholder="Insert Bank's name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bankAccountNumber" class="col-sm-2 col-form-label">Bank Account number:</label>
                            <div class="col-sm-6">
                                <input required type="text" class="form-control" pattern="[0-9]{6,10}" name="bankAccountNumber" id="bankAccountNumber" placeholder="Insert Account Number">
                            </div>
                        </div>
                        <br>
                        <p>*A guarantor is recommended to prevent service block at overdraft </p>
                        <div class="form-group row">
                            <label for="guarantorFirstName" class="col-sm-2 col-form-label">Guarantor's First Name:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="guarantorFirstName" id="guarantorFirstName" placeholder="Insert First Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="guarantorLastName" class="col-sm-2 col-form-label">Guarantor's Last Name:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control"name="guarantorLastName"  id="guarantorLastName" placeholder="Insert Last Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="guarantorId" class="col-sm-2 col-form-label">Guarantor's ID</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" maxlength="9" pattern="[0-9]{9}" name="guarantorId" id="guarantorId" placeholder="Insert ID Number (9 Digits)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="guarantorBankName" class="col-sm-2 col-form-label">Guarantor's Bank's Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="guarantorBankName" id="guarantorBankName" placeholder="Insert Bank's name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="guarantorBankAccountNumber" class="col-sm-2 col-form-label">Guarantor's Bank Account number:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" pattern="[0-9]{6,10}" name="guarantorBankAccountNumber" id="BankAccountNumber" placeholder="Insert Account Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                    <div class="col-6 col-form-label">
                                    </div>
                                <button type="submit" class="btn btn-primary btn-block mainActionBtn text-center">Confirm</button>
                                <!-- <button id="submitAccount" type="submit" class="btn btn-success btn-lg btn-block" href="index.html">Confirm</button> -->
                            </div>
                        </div>
                     </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>