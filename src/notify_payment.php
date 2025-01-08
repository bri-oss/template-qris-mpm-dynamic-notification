<?php

require 'utils.php';

// url path values
$baseUrl = 'https://api.bridex.qore.page/mock'; //base url

try {
  list($clientId, $clientSecret, $privateKey) = getCredentials();

  $accessToken = getAccessToken(
    $clientId,
    $baseUrl,
    $privateKey
  );

  $externalId = '';
  $origin = '';
  $ipAddress = '';
  $deviceId = '';
  $latitude = '';
  $longitude = '';
  $channelId = '';

  $validateInputs = sanitizeInput([
    'externalId' => $externalId,
    'origin' => $origin,
    'ipAddress' => $ipAddress,
    'deviceId' => $deviceId,
    'latitude' => $latitude,
    'longitude' => $longitude,
    'channelId' => $channelId
  ]);

  $response = fetchNotifyPayment(
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

} catch (Exception $e) {
  error_log('Error: ' . $e->getMessage());
  exit(1);
}
