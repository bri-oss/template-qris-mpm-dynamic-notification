<?php

use BRI\Util\GetAccessToken;

require __DIR__ . '/../../briapi-sdk/autoload.php';

require __DIR__ . '/../vendor/autoload.php';
Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/..' . '')->load();

// env values
$clientId = 'your_client_id';
$clientSecret = 'super_secret';
$privateKey = $_ENV['PRIVATE_KEY'];

// url path values
$baseUrl = 'https://api.bridex.qore.page/mock'; //base url

$getAccessToken = new GetAccessToken();

$accessToken = $getAccessToken->getMockOutbound(
  $clientId,
  $baseUrl,
  $privateKey
);

echo $accessToken;
