<!DOCTYPE html>
<html>
<head>

    <title>Payment</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- Crucial for Laravel --}}
</head>
<body>
    <h1>Make a Payment</h1>

    <!-- <form id="payment-form">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" value="10.00" min="0.01" step="0.01" required><br><br>

        <label for="currency">Currency:</label>
        <select id="currency" name="currency">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="BTC">BTC</option>
        </select><br><br>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" value="Product Purchase" required><br><br>

        <button type="submit">Pay with NowPayments</button>

        <div id="payment-status"></div> {{-- For displaying status messages --}}
    </form> -->

    <form id="payment-form">
        @csrf
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" value="10.00" min="0.01" step="0.01" required><br><br>

        <label for="currency">Currency:</label>
        <select id="currency" name="currency" required>
            <!-- Dynamically populated -->
        </select><br><br>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" value="Product Purchase" required><br><br>
        <p id="payment-status"></p>
        <button type="submit">Pay with NowPayments</button>
    </form>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        const currencySelect = $('#currency');
        const paymentForm = $('#payment-form');
        const paymentStatus = $('#payment-status');

        // Fetch available currencies from your Laravel endpoint
        $.ajax({
            url: '{{ route('payment.list') }}', // Define this route
            type: 'GET',
            success: function(data) {
                console.log(data);
                if (data && data.currencies) {
                    data.currencies.currencies.forEach(function(currency) {
                        const option = $('<option></option>')
                            .val(currency.code)
                            .text(currency.name + ' (' + currency.code + ')');
                        currencySelect.append(option);
                    });
                } else {
                    paymentStatus.text('Error fetching currencies.');
                }
            },
            error: function() {
                paymentStatus.text('Failed to load currencies.');
            }
        });

        // // Handle form submission
        // paymentForm.on('submit', function(e) {
        //     e.preventDefault();
        //     paymentStatus.text('Processing payment...');

        //     const formData = paymentForm.serialize(); // Serialize form data
        //     $.ajax({
        //         url: '{{ route('process.payment') }}',
        //         type: 'POST',
        //         data: formData,
        //         headers: {
        //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //         },
        //         success: function(result) {
        //             console.log(result);
        //             if (result.success) {
        //                 paymentStatus.text('Payment successfully created.');
        //                 window.location.href = result.success_url; // Redirect to success URL
        //             } else {
        //                 paymentStatus.text('Payment failed: ' + result.error);
        //             }
        //         },
        //         error: function(error) {
        //             paymentStatus.text('Error processing payment: ' + error.message);
        //         }
        //     });
        // });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentForm = document.getElementById('payment-form');
        const paymentStatus = document.getElementById('payment-status');
        paymentForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const amount = document.getElementById('amount').value;
            const currency = document.getElementById('currency').value;
            const description = document.getElementById('description').value;
            const orderId = generateOrderId(); // Generate a unique order ID

            fetch('{{ route('nowpayments.create') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({
                    price_amount: amount,
                    price_currency: currency,
                    order_id: orderId,
                    order_description: description,
                }),
            })
            .then(response => {
                console.log(response);
                if (!response.ok) {
                    paymentStatus.textContent = 'Error: Invoice URL not received.';
                    // return response.json().then(err => {throw new Error(err.message || "Network response was not ok")}); // Extract error message from JSON
                }
                return response.json();
            })
            .then(data => {
                if (data.invoice_url) {
                    window.location.href = data.invoice_url;
                } else {
                    paymentStatus.textContent = 'Error: Invoice URL not received.';
                    console.error("No invoice URL received:", data);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                paymentStatus.textContent = 'Error: ' + error.message; // Display error message to user
            });
        });

        function generateOrderId() {
            // Simple order ID generation (you might want a more robust solution)
            return 'ORDER-' + Date.now();
        }
    });
</script>