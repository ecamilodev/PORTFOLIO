<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Contact Email
    |--------------------------------------------------------------------------
    |
    | The email address where contact form submissions will be sent.
    | Set this in your .env file as PORTFOLIO_CONTACT_EMAIL.
    |
    */
    'contact_email' => env('PORTFOLIO_CONTACT_EMAIL', 'sanchezeduard68@gmail.com'),

    /*
    |--------------------------------------------------------------------------
    | reCAPTCHA v3
    |--------------------------------------------------------------------------
    |
    | Keys used to protect the contact form against spam/bots.
    | Set these in your .env file as RECAPTCHA_SITE_KEY / RECAPTCHA_SECRET_KEY.
    |
    */
    'recaptcha' => [
        'site_key'   => env('RECAPTCHA_SITE_KEY', ''),
        'secret_key' => env('RECAPTCHA_SECRET_KEY', ''),
    ],
];
