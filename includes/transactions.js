const onStartTransaction = function(depositorId, pullerId, amount, currentTransactionUsername) {

    let dataString = generateDataString([
       {
           name: 'depositorId',
           value: depositorId
       },
       {
           name: 'pullerId',
           value: pullerId
       },
       {
           name: 'amount',
           value: amount
       },
       {
           name: 'generatedPassword',
           value: createHashCode(4)
       },
   ]);

   console.log(dataString);

   $.ajax({
       type: "POST",
       url: "includes/start-transaction.php",
       data: dataString,
       cache: true,
       success: function(data) {
           let resultObj = JSON.parse(data);
           if(resultObj.result === true) {
            
            $("#successfullTransactionMsg").text(`The transaction sent to ${currentTransactionUsername}. The generated code is ${resultObj.generatedPassword}`)
            $("#successfullTransaction").css("display", "block");
            // $("#userDetails").css("display", "none");
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
}

