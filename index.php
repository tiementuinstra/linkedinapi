<?php

// ... please, add composer autoloader first
include_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
include_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/zoonman/linkedin-api-php-client/src/Scope.php';
// import client class
use LinkedIn\Client;
use LinkedIn\Scope;
use LinkedIn\AccessToken;
use LinkedIn\guzzlehttp;

// instantiate the Linkedin client
$client = new Client(
    '78mgvms3nlizz9',
    'iWM1vC3EewlH4fLD'
);
// load token from the file
$token = 'YOUR_TOKEN';
$expires = 'EXPIRY';
// instantiate access token object from stored data
$accessToken = new AccessToken($token, $expires);

// set token for client
$client->setAccessToken($accessToken);

if (!empty($token)) {
    $profile = $client->get(
        'me',
        ['fields' => 'id,firstName,lastName']
    );
    var_dump($prifile);
    // pp($profile); // print profile information
}



/**
 * Pretty print whatever passed in
 *
 * @param mixed $anything
 */
function pp($anything)
{
    echo '<pre>' . print_r($anything, true) . '</pre>';
}

/**
 * Add header
 *
 * @param string $h
 */
function h1($h)
{
    echo '<h1>' . $h . '</h1>';
}
