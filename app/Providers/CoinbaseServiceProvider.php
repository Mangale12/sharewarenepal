<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use CoinbaseCommerce\ApiClient;

class CoinbaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ApiClient::class, function () {
            $apiKey = env('COINBASE_COMMERCE_API_KEY');
            $client = ApiClient::init($apiKey);
            return $client;
        });
    }

    public function boot()
    {
        //
    }
}
