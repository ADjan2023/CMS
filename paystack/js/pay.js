
 //paymentForm.addEventListener("submit", payWithPaystack, false);
      function payWithPaystack() {
        event.preventDefault();

        let handler = PaystackPop.setup({
          key: 'pk_test_8e719889d1e48a17729f97da94a5ac2e7cac9857', // Replace with your public key
          email: document.getElementById("email").value,
          amount: document.getElementById("amount").value * 100,
          ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
          currency: 'GHS',
          // label: "Optional string that replaces customer email"
          onClose: function(){
            alert('Window closed.');
          },
          callback: function(response){
            
            let message = 'Payment complete! Reference: ' + response.reference;
            alert(message);

            $.ajax({
    url: '../actions/process_paystack.php'+ response.reference,
    method: 'get',
    success: function (response) {
      // the transaction status is in response.data.status
      alert(response);
    },
  });

          }
        });
        
        handler.openIframe();
      }