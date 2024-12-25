<?php

namespace App\Http\Controllers;

use CoinbaseCommerce\Resources\Charge;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function createCharge()
    {
        $chargeData = [
            'name' => 'Example Product',
            'description' => 'This is an example product payment.',
            'pricing_type' => 'fixed_price',
            'local_price' => [
                'amount' => '10.00',
                'currency' => 'USD',
            ],
            'metadata' => [
                'customer_id' => 12345,
                'order_id' => 'ABC123',
            ],
        ];

        try {
            $charge = Charge::create($chargeData);
            return redirect($charge->hosted_url);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function handleWebhook(Request $request)
    {
        $signature = $request->header('X-Cc-Webhook-Signature');
        $payload = $request->getContent();

        try {
            $event = \CoinbaseCommerce\Webhook::buildEvent(
                $payload,
                $signature,
                env('COINBASE_COMMERCE_WEBHOOK_SECRET')
            );

            if ($event->type === 'charge:confirmed') {
                $chargeId = $event->data->id;
                // Process payment confirmation here
                // E.g., update your order status in the database
            }

            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid webhook signature'], 400);
        }
    }
}
