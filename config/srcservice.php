<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the SRC Service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Hash
    |--------------------------------------------------------------------------
    |
    | This key is used by the SRC Service
    |
    */

    'hash' => 'sha256',

    /*
    |--------------------------------------------------------------------------
    | Expire
    |--------------------------------------------------------------------------
    |
    | The expire time is the number of seconds that the access key should be
    | considered valid. This security feature keeps access keys short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'expire' => 14400

];
