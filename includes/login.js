
$("document").ready(function() {       //Main

    let isLoginSucceeded = false;

    $("#loginForm").submit(function(event) {
        console.log("BLA");

        let username = $("input[name=username]").val();
        let password = $("input[name=password]").val();

        let dataString = `username=${username}&password=${password}`;

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
                    
                }
                // Login succeeded
                else {
                    window.location.replace("index.php");
                }
            },
            error: function(event) {
                console.log(event);
                console.log("fail");
            }
        }).done(function(event) {
            console.log(event);
            console.log("done");
        });

        // In order to avoid the form redirection
        return false;
    });
});