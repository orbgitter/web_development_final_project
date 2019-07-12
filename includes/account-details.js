

$("document").ready(function() {       //Main

    // let defaultDate = new Date();
    // defaultDate.setFullYear( defaultDate.getFullYear() - 18 );
    // $('#birthdate').datepicker({format: 'mm/dd/yyyy', endDate: defaultDate });

    // let getParamNewUser = findGetParameter("newUser");
    // let isNewUser = (getParamNewUser != null && getParamNewUser === "true");

    let isNewUser = findGetParameter("newUser") === "true";
    console.log(isNewUser);
    console.log($("input[name=isDepositor]").val());

    $("button[type=submit]").click(function() {
        // console.log($("input[name=birthdate]").val());
        console.log($("input[name=isDepositor]").val());
    })


    $("#createAccountForm").submit(function(event) {

        console.log("form sent");
        
        let dataString = generateDataString([
            {
                name: 'fullName',
                value: $("input[name=fullName]").val()
            },
            {
                name: 'userName',
                value: $("input[name=userName]").val()
            },
            {
                name: 'userId',
                value: $("input[name=userId]").val()
            },
            {
                name: 'amount',
                value: $("input[name=amount]").val()
            },
            {
                name: 'password',
                value: $("input[name=password]").val()
            },
            {
                name: 'bankName',
                value: $("input[name=bankName]").val()
            },
            {
                name: 'branchNumber',
                value: $("input[name=branchNumber]").val()
            },
            {
                name: 'bankAccountNumber',
                value: $("input[name=bankAccountNumber]").val()
            },
            {
                name: 'isPuller',
                value: $("input[name=isPuller]").is(":checked") ? 1 : 0
            },
            {
                name: 'isDepositor',
                value: $("input[name=isDepositor]").is(":checked") ? 1 : 0
            },
            {
                name: 'amountToDeposit',
                value: $("input[name=amountToDeposit]").val()
            },
            {
                name: 'amountToWithdraw',
                value: $("input[name=amountToWithdraw]").val()
            },
            {
                name: 'newUser',
                value: isNewUser
            }
        ]);
    
        // console.log(dataString);

        $.ajax({
            type: "POST",
            url: "includes/register.php",
            data: dataString,
            cache: true,
            success: function(data) {
                let resultObj = JSON.parse(data);
                if(resultObj.result === true) {
                    window.location.replace("index.php");
                }
                else {
                    // PRINT / DISPLAY that user details failed
                    console.log(resultObj.message)
                }

            },
            error: function(event) {
                console.log(event);
                console.log("fail");
            }
        }).done(function(data) {
            console.log("done");
        });

        // In order to avoid the form redirection
        return false;
    });

});