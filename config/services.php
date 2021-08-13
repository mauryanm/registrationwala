<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // 'facebook' => [
    //     'client_id' => '1085794198098224',
    //     'client_secret' => 'b881f9a6fe5c4b93558d54c95bf2b4fc',
    //     'redirect' => 'https://cagauravbansal.com/facebook/callback',
    // ],
    'facebook' => [
        'client_id' => '536176547433653',
        'client_secret' => '188e3a766ac35198cf3a2ed312536355',
        'redirect' => 'https://www.registrationwala.com/facebook/callback',
    ],

    //     'google' => [
    //     'client_id' => '892703187235-bg49jtlfe1gmtffpgsrdqcdarumpsi72.apps.googleusercontent.com',
    //     'client_secret' => 'QUx7A6nNnnphi_-VRIxQ-aSO',
    //     'redirect' => 'https://registrationwala.com/google/callback',

    // ],
    'google' => [
        'client_id' => '892703187235-j308pap8fm1vvdrpr5pmk034i7q41mgi.apps.googleusercontent.com',
        'client_secret' => 'Q7I0byXh_PMrBlefdoV0xmpg',
        'redirect' => 'https://www.registrationwala.com/google/callback',

    ],

];
