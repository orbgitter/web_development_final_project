let createHashCode = function(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
       result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
 }
 
$("document").ready(function() {       //Main

    let depositorToggleBtn = $("#isActiveDepositorToggleBtn");

    depositorToggleBtn.bootstrapToggle();
    depositorToggleBtn.change(function() {
        console.log(depositorToggleBtn.prop('checked'));    
    });

    $("#generatorHashcodeBtn").click(function() {
        let generatedHashcode = createHashCode(11);
        console.log(generatedHashcode);
        $("#hashCodePlaceHolder").text(generatedHashcode);
    });

    $("#submitAccount").click(function() {

    // let formObj = $("#createAccountForm");
    // console.log(formObj);
    // formObj.validate();
    // if(formObj.valid()) {
    //     console.log("FORM IS VALID");
    // }
    // else 
    //     console.log("FORM IS NOT VALID");
    });
});