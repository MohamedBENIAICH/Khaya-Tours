<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

 return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can be 'sandbox' or 'live'.
    'sandbox' => [
        'username'         => env('PAYPAL_SANDBOX_API_USERNAME', ''),
        'password'     => env('PAYPAL_SANDBOX_API_PASSWORD', ''),
        'secret'     => env('PAYPAL_SANDBOX_API_SECRET', ''),
        'certificate'     => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
        'app_id'            => 'APP-80W284485P519543T',
    ],
    'live' => [
        'username'         => env('PAYPAL_SANDBOX_API_USERNAME', ''),
        'password'     => env('PAYPAL_SANDBOX_API_PASSWORD', ''),
        'secret'     => env('PAYPAL_SANDBOX_API_SECRET', ''),
        'certificate'     => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
        'app_id'            => 'APP-80W284485P519543T',
    ],
    'payment_action' => 'Sale', // Can be 'Sale', 'Authorization', or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'billing_type'   => 'MerchantInitiatedBilling',
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => '', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => true, // Validate SSL when creating api client.
];
