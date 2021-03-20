<?php

return [
    
    'client_id' => env('PAYPAL_SANDBOX_API_PASSWORD'),
    'secret' => env('PAYPAL_SANDBOX_API_SECRET'),

    'settings' => [
        'mode' => env('PAYPAL_MODE', 'sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path('/logs/paypal.log'),
        'log.LogLevel' => 'ERROR',
    ]
];

/*
'client_id' => env('PAYPAL_SANDBOX_API_PASSWORD'),
'secret' => env('PAYPAL_SANDBOX_API_SECRET'),
*/