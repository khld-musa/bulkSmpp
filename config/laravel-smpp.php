<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default SMPP settings
    |--------------------------------------------------------------------------
    |
    | 1. "sender" is the SMS message sender, either phone number or something like ABCDEF.
    | 2. "source_ton" is the sender's type of number
    | 3. "source_npi" is the sender's numbering plan identification
    | 4. "destination_ton" is the receiver's type of number
    | 5. "destination_npi" is the receiver's numbering plan identification
    |
    | Usually SMPP providers provide these settings to their clients.
    | Please refer to official SMPP protocol specification v3.4 to learn more about TON and NPI settings.
    |
    */

    'defaults' => [
        'sender' => 'khalid',
        'source_ton' => 0,
        'source_npi' => 5,
        'destination_ton' => 0,
        'destination_npi' => 5
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom SMPP provider settings
    |--------------------------------------------------------------------------
    |
    | Most of the time, settings shown under the "example" key are be provided by your SMPP provider.
    | So if you don't have any of these settings, please contact your SMPP provider.
    |
    */

    'default' => env('SMPP_DEFAULT_PROVIDER'),

    'providers' => [
        'example' => [
            'host' => '10.190.2.253',
            'port' => 10010,
            'timeout' => 90,
            'login' => 'MobiaddTest',
            'password' => 'MobiaddTest'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | SMPP transport settings
    |--------------------------------------------------------------------------
    |
    | For all SMPP errors listed in "transport.catchables", exceptions
    | thrown by SMPP will be suppressed and just logged.
    |
    */

    'transport' => [
        'catchables' => [
            SMPP::ESME_RBINDFAIL,
            SMPP::ESME_RINVCMDID
        ],
        'force_ipv4' => true,
        'debug' => false
    ],

    /*
    |--------------------------------------------------------------------------
    | SMPP client settings
    |--------------------------------------------------------------------------
    */

    'client' => [
        'system_type' => 'default',
        'null_terminate_octetstrings' => false,
        'debug' => false
    ]
];
