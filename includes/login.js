
$("document").ready(function() {       //Main

    let errorCredtialsMsg = $("#incorrectCredentials");

    $("#loginForm").submit(function(event) {
        console.log("BLA");

        let dataString = generateDataString([
            {
                name: 'username',
                value: $("input[name=username]").val()
            },
            {
                name: 'password',
                value: $("input[name=password]").val()
            }
        ]);

        $.ajax({
            type: "POST",
            url: "login_session.php",
            data: dataString,
            cache: true,
            success: function(data) {
                console.log(data);
                let userObj = JSON.parse(data);

                // Login is failed
                if(userObj == null) {
                    errorCredtialsMsg.css('visibility', 'visible');
                }
                // Login succeeded
                else {
                    errorCredtialsMsg.css('visibility', 'hidden');
                    window.location.replace("index.php");
                }
            },
            error: function(event) {
                // console.log(event);
            }
        }).done(function(event) {
            // console.log(event);
        });
        // In order to avoid the form redirection
        return false;
    });
});