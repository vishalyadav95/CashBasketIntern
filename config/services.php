<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
	
	'facebook' => [
    'client_id' => '107546483107217',
    'client_secret' => '0ee1104d59b51712685622f59f963ab8',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
	],
	'twitter' => [
    'client_id' => 'iefKYuOCFfZTbu5mYUJK3KfMr',
    'client_secret' => 's7itezfyYaLBTbOdJLCcqTBrZFnkZo6dSv9pTTPIxXFVzb7GOW',
    'redirect' => 'http://localhost:8000/auth/twitter/callback',
	],
	'google' => [
    'client_id' => '261653971385-h3sfn3od5u8u2360b1m6jeqproi27i9t.apps.googleusercontent.com',
    'client_secret' => 'yElFOY5BRCBDWKemtFqjv1On',
    'redirect' => 'http://localhost:8000/auth/google/callback',
	],

];
