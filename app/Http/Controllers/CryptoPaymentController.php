<?php

namespace App\Http\Controllers;

use CoinbaseCommerce\ApiClient;
use CoinbaseCommerce\Resources\Charge;

class CryptoPaymentController extends Controller
{
    public function createPayment(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric|min:0.01',
            'currency' => 'required|string|in:BTC,ETH,USDC', // Add supported currencies
        ]);

        ApiClient::init(env('COINBASE_API_KEY')); // Set your API key in .env

        $chargeData = [
            'name' => $request->input('name'),
            'description' => 'Payment for order #' . uniqid(),
            'local_price' => [
                'amount' => $request->input('amount'),
                'currency' => 'USD', // Convert this to fiat or crypto as needed
            ],
            'pricing_type' => 'fixed_price',
        ];

        $charge = Charge::create($chargeData);

        return redirect($charge->hosted_url); // Redirect to the Coinbase payment page
    }

    public function handlePaymentCallback($chargeId, Request $request){
        ApiClient::init(env('COINBASE_API_KEY')); // Set your API key in .env

        $charge = Charge::retrieve($chargeId);

        if ($charge->status === 'completed') {
            // Process the payment
            // Example: Update the order status in your database
            // Log the successful payment
        } else {
            // Handle failed payment
            // Example: Log the failed payment and send a notification
        }
    }

    public function form(){
        return view('frontend.crypto');
    }
}
