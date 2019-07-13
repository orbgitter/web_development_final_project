
let selectedTransaction = null;

const refreshTransactions = function(userId) {

    // Get the user id
    let dataString = `userId=${userId}`;

        $.ajax({
            type: "POST",
            url: "includes/check-transactions.php",
            data: dataString,
            cache: true,
            success: function(data) {
                // console.log(data);
                let openTransactions = JSON.parse(data);
                console.log(openTransactions);

                if(openTransactions.transactions && openTransactions.transactions.length > 0 &&  !($("#transactionModal").hasClass("show"))) {
                    // openTransactions.transactions.forEach(function(element) { element. = "false"; });
                    selectedTransaction = openTransactions.transactions[0];
                   
                    $("#transactionDetails").text(`The user ${selectedTransaction.UserName} . ETA is ${getRandomTime()}`);
                    
                    $("#openTransactionModalBtn").click();
                }
            },
            error: function(event) {
                // console.log(event);
            }
        }).done(function(event) {
            // console.log(event);
        });
}

const startRefreshTransactions = function(userId) {

    const intervalTimeInSeconds = 30000;
    refreshTransactions(userId);
    let intervalId = setInterval( () => refreshTransactions(userId) , intervalTimeInSeconds);
}

const dismissTransaction = function() {

    console.log("DISMISSING ...");
    console.log(selectedTransaction);

    if(selectedTransaction != null) {

        let dataString = `transactionId=${selectedTransaction["TransactionId"]}`;

        $.ajax({
            type: "POST",
            url: "includes/decline-transactions.php",
            data: dataString,
            cache: true,
            success: function(data) {
                // // console.log(data);
                // let openTransactions = JSON.parse(data);
                // console.log(openTransactions);

                // if(openTransactions.transactions && openTransactions.transactions.length > 0 &&  !($("#transactionModal").hasClass("show"))) {
                //     // openTransactions.transactions.forEach(function(element) { element. = "false"; });
                //     let selectedTransaction = openTransactions.transactions[0];
                
                //     $("#transactionModal .modal-body").text(`The user ${selectedTransaction.UserName} . ETA is ${getRandomTime()}`);
                    
                //     $("#openTransactionModalBtn").click();
                // }
            },
            error: function(event) {
                // console.log(event);
            }
        }).done(function(event) {
            // console.log(event);
        });
    }
}

// const enableBtnCheck = function() {
//     if( $("#textElement").val().length > 0) {

//     }
// }

const applyGeneratedCode = function() {

    let generatedCodeInput = $("#generatedCodeInput").val();

    if(generatedCodeInput === selectedTransaction["GeneratedPassword"]) {
        console.log("CORRECT !");

            // Get the user id
        let dataString = `transactionId=${selectedTransaction["TransactionId"]}`;

        $.ajax({
            type: "POST",
            url: "includes/apply-transactions.php",
            data: dataString,
            cache: true,
            success: function(data) {
                // console.log(data);
                // PUT SUCCESS MESSAGE AFTER TRANSACTION COMPLETED
            },
            error: function(event) {
                // console.log(event);
            }
        }).done(function(event) {
            // console.log(event);
        });

    }
    else {
        console.log("ERROR !"); // TODO
    }
}

$("document").ready(function() {       //Main

    // let applyGeneratedCodeBtn = $("#applyGeneratedCodeBtn");
    // let generatedCodeInput = $("#generatedCodeInput");

    // generatedCodeInput.keypress(function() {
    //     if( applyGeneratedCodeBtn.is(":disabled") && generatedCodeInput.val().length > 0) {
    //         applyGeneratedCodeBtn.removeAttr("disabled");
    //     }
    //     if(generatedCodeInput.val() == 0) {
    //         applyGeneratedCodeBtn.attr("disabled", "disabled");
    //     }
    // });

});