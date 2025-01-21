<?php

namespace App\Services;

use GuzzleHttp\Client;

class NowPaymentsService
{
    protected $client;
    protected $apiKey;

    public function __construct(Client $client)
    {
        $this->apiKey = config('services.nowpayments.api_key'); // Store API key in config
        // $this->client = new Client([
        //     'base_uri' => 'https://api.nowpayments.io/v1/',
        //     'headers' => [
        //         'x-api-key' => $this->apiKey,
        //         'Content-Type' => 'application/json',
        //     ],
        // ]);
        $this->client = $client;
    }
    public function showSupportedCurrencies()
{
    $supportedCurrencies = $this->nowPaymentsService->getSupportedCurrencies();
    
    if (empty($supportedCurrencies)) {
        return response()->json(['error' => 'Failed to fetch supported currencies.'], 500);
    }

    return response()->json($supportedCurrencies);
}

    public function getSupportedCurrencies()
    {
        try {
            $response = $this->client->get('currencies');
            return json_decode($response->getBody(), true);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            \Log::error("Failed to fetch supported currencies: " . $e->getMessage());
            return [];
        }
    }
    
    public function createPayment($data)
    {
        $apiKey = env('NOWPAYMENTS_API_KEY');  // Retrieve API Key from .env
        $url = 'https://api.nowpayments.io/v1/invoice';
        $headers = [
            'x-api-key' => $apiKey,
            'Content-Type' => 'application/json',
        ];

        $body = json_encode($orderData);

        try {
            $response = $this->client->post($url, [
                'headers' => $headers,
                'body' => $body,
            ]);

            // Parse and return the response body
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            Log::error('NOWPayments API Request failed: ' . $e->getMessage());
            return [
                'error' => 'Unable to create invoice, please try again later.'
            ];
        }
    }


      public function getPaymentStatus($paymentId)
    {
        try {
            $response = $this->client->get("payment/$paymentId");
            return json_decode($response->getBody(), true);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            \Log::error("NowPayments API Error: " . $e->getMessage());
            return null;
        }
    }
}
