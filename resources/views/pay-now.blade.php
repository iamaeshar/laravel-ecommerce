<x-app-layout>
    <button id="rzp-button1">Pay</button>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_tED2Fkg9vsmnV8",
            "amount": "50000",
            "currency": "INR",
            "name": "Acme Corp",
            "description": "Test Transaction",
            "image": "http://127.0.0.1:8000/logo.png",
            "order_id": "order_9A33XWu170gUtm",
            "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
            "prefill": {
                "name": "Gaurav Kumar",
                "email": "gaurav.kumar@example.com",
                "contact": "9000090000"
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        document.getElementById('rzp-button1').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
    </script>
</x-app-layout>
