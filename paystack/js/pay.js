var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);
function payWithPaystack() {
  var handler = PaystackPop.setup({
    key: 'pk_test_8e719889d1e48a17729f97da94a5ac2e7cac9857', // Replace with your public key
    email: document.getElementById('email-address').value,
    amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
    currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: 'YOUR_REFERENCE', // Replace with a reference you generated

    onClose: function() {
      
      window.location.href="../success.php";
    },
    callback_url: function(success){
 window.location.replace('../success.php');
  });
  handler.openIframe();
}