<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => 'live', // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'username'    => env('PAYPAL_SANDBOX_API_USERNAME', ''),
        'password'    => env('PAYPAL_SANDBOX_API_PASSWORD', ''),
        'secret'      => env('PAYPAL_SANDBOX_API_SECRET', ''),
        'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
        'app_id'      => 'APP-80W284485P519543T', // Used for testing Adaptive Payments API in sandbox mode
    ],
    'live' => [
        'username'    => 'mr.manjeetsingh10@gmail.com',
        'password'    => 'AXOf4AyqHuiwt1utt5zMz7Em50gfHj2S6CEr1-jlF_mnDpT1OGCGC2yVZ6fJ5O4j8wDgVjyFijKkpDuP',
        'secret'      => 'ECueeyKO6DyUJDn2UwaJdYEdSVuHGWYo-ew38AfbGhZdEpEVdu8MSBt6EtovUbQgKZcMQ4ToZkHb3f74',
        'certificate' => '',
        'app_id'      => '', // Used for Adaptive Payments API
    ],

    'payment_action' => 'Sale', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'billing_type'   => 'MerchantInitiatedBilling',
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => '', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => true, // Validate SSL when creating api client.
];
