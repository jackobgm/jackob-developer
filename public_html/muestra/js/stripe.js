var stripe = Stripe('pk_test_6Exid6yjoftGiiVk5As6x9fB00V0nJEss8');
var checkoutButton = document.getElementById('placeOrder');

checkoutButton.addEventListener('click', function() {
    // Create a new Checkout Session using the server-side endpoint you
    // created in step 3.
    fetch('http://website.consulfinhn.com/stripe/pay', {
            method: 'POST',
        })
        .then(function(response) {
            //response = JSON.parse(response);
            //res = JSON.stringify(response);
            console.log(response);
            //return JSON.parse(res);
            return response;
            //return response.json();
        })
        .then(function(session) {
            console.log('checkout')
            console.log(session)
            return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(function(result) {
            // If `redirectToCheckout` fails due to a browser or network
            // error, you should display the localized error message to your
            // customer using `error.message`.
            if (result.error) {
                alert(result.error.message);
            }
        })
        .catch(function(error) {
            console.error('Error:', error);
        });

    //axiox.post('http://website');
});