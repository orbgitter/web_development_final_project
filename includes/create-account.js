

$("document").ready(function() {       //Main

    // let defaultDate = new Date();
    // defaultDate.setFullYear( defaultDate.getFullYear() - 18 );
    // $('#birthdate').datepicker({format: 'mm/dd/yyyy', endDate: defaultDate });



    $("button[type=submit]").click(function() {
        // console.log($("input[name=birthdate]").val());
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
            }
        ]);

        $.ajax({
            type: "POST",
            url: "includes/register.php",
            data: dataString,
            cache: true,
            success: function(data) {
                console.log(data);
                // let userObj = JSON.parse(data);
                
                // // Login is failed
                // if(userObj == null) {
                    
                // }
                // // Login succeeded
                // else {
                //     window.location.replace("index.php");
                // }
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