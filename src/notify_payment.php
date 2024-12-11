<?php

use BRI\QrisMPMDynamicNotification\NotifyPayment;
use BRI\Util\GetAccessToken;

require __DIR__ . '/../../briapi-sdk/autoload.php';

require __DIR__ . '/../vendor/autoload.php';
Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/..' . '')->load();

// env values
$clientSecret = 'S7zgRMA0rUMf4ddkagpreoECgYEAxRkh';
$clientId = 'your_client_id';
$privateKey = $_ENV['PRIVATE_KEY'];

// url path values
$baseUrl = 'https://api.bridex.qore.page/mock'; //base url

$getAccessToken = new GetAccessToken();

$accessToken = $getAccessToken->getMockOutbound(
  $clientId,
  $baseUrl,
  $privateKey
);

$externalId = '41807553358950093184162180797837';
$origin = 'bri.co.id';
$ipAddress = '172.24.281.24';
$deviceId = '09864ADCASA';
$latitude = '-6.108841';
$longitude = '106.7782137';
$channelId = '95221';

$qrisMpmDynamicNotification = new NotifyPayment();

$response = $qrisMpmDynamicNotification->notifyPayment(
  $baseUrl,
  $clientId,
  $clientSecret,
  $externalId,
  $ipAddress,
  $deviceId,
  $latitude,
  $longitude,
  $channelId,
  $origin,
  $accessToken
);

echo $response;
