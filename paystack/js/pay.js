
const paymentForm = document.getElementById('paymentForm');
  paymentForm.addEventListener("submit", payWithPaystack, false);

  // PAYMENT FUNCTION
  function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_8e719889d1e48a17729f97da94a5ac2e7cac9857', // Replace with your public key
    email: document.getElementById("email").value,
    amount: document.getElementById("amount").value * 100,
    currency:'GHS',
     ref: ''+Math.floor((Math.random() * 1000000000) + 1),
    onClose: function(){
    alert('Window closed.');
    },
    callback: function(response){
            alert("payment have been made"+ response.reference);
            $.ajax({
              url:"process.php?reference="+ response.reference,
              method:'GET',
              success: function (response){
                window.location.href = "../paystack/success.php";
              }

            });
    }
  });
  handler.openIframe();
}