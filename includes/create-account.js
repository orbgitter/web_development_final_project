

$("document").ready(function() {       //Main

    let defaultDate = new Date();
    defaultDate.setFullYear( defaultDate.getFullYear() - 18 );

    $('#birthdate').datepicker({format: 'mm/dd/yyyy', endDate: defaultDate });


    $("#createAccountForm").submit(function(event) {

        console.log("form sent");
        
        let dataString = generateDataString([
            {
                name: 'fullName',
                value: `${$("input[name=firstName]").val()} ${$("input[name=lastName]").val()}`
            },
            {
                name: 'birthdate',
                value: $("input[name=birthdate]").val() 
            },
            {
                name: 'username',
                value: $("input[name=username]").val()
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
                name: 'bankAccountNumber',
                value: $("input[name=bankAccountNumber]").val()
            },
            {
                name: 'guarantorFullName',
                value: `${$("input[name=guarantorFirstName]").val()} ${$("input[name=guarantorLastName]").val()}`
            },
            {
                name: 'guarantorId',
                value: $("input[name=guarantorId]").val()
            },
            {
                name: 'guarantorBankName',
                value: $("input[name=guarantorBankName]").val()
            },
            {
                name: 'guarantorBankAccountNumber',
                value: $("input[name=guarantorBankAccountNumber]").val()
            },
            {
                name: 'guarantorBankAccountNumber',
                value: $("input[name=guarantorBankAccountNumber]").val()
            },
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