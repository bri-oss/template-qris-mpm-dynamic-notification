<?php

use BRI\QrisMPMDynamicNotification\NotifyPayment;

require __DIR__ . '/../../briapi-sdk/autoload.php';

// env values
$clientId = '';
$clientSecret = '';

// url path values
$baseUrl = 'https://api.bridex.qore.page/mock'; //base url

$externalId = '';
$origin = '';
$ipAddress = '';
$deviceId = '';
$latitude = '';
$longitude = '';
$channelId = '';

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
  $origin
);

echo $response;
