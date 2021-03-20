<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PayTest</title>
    
    

</head>
<body>
    <script src="https://www.paypal.com/sdk/js?client-id=Ab6f8ifNbrXGL3eAbDMpeRmYIovASQ61-xKRJvtiRsBZkFzC6b24jzQ5mivl7VLs38c2svAQ1PWegaeR"></script>
    <script src="https://js.stripe.com/v3/"></script>

    <div id="paypal-button-container"></div>
    <div id="payment-request-button"></div>

    
    
    <script>
    //paypal.Button().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script>
  
  <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '5.00'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
  
  
  const stripe = Stripe('pk_test_6Exid6yjoftGiiVk5As6x9fB00V0nJEss8', {
  apiVersion: "2020-08-27",
});

const paymentRequest = stripe.paymentRequest({
  country: 'US',
  currency: 'usd',
  total: {
    label: 'Demo total',
    amount: 60,
  },
  requestPayerName: true,
  requestPayerEmail: true,
});

const elements = stripe.elements();
const prButton = elements.create('paymentRequestButton', {
  paymentRequest,
});

(async () => {
  // Check the availability of the Payment Request API first.
  const result = await paymentRequest.canMakePayment();
  if (result) {
    prButton.mount('#payment-request-button');
  } else {
    document.getElementById('payment-request-button').style.display = 'none';
  }
})();
  
</script>
</body>
</html>