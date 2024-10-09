<?php

use BRI\QrisMPMDynamicNotification\NotifyPayment;

require __DIR__ . '/../../briapi-sdk/autoload.php';

// env values
$clientId = 'your_client_id';
$clientSecret = 'super_secret';

// url path values
$baseUrl = 'https://api.bridex.qore.page/mock'; //base url

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
  $origin
);

echo $response;
