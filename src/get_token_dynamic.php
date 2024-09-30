<?php

use BRI\Util\GetAccessToken;

require __DIR__ . '/../../briapi-sdk/autoload.php';

// env values
$clientId = '';
$clientSecret = '';

// url path values
$baseUrl = 'https://api.bridex.qore.page/mock'; //base url

$getAccessToken = new GetAccessToken();

$accessToken = $getAccessToken->getMockOutbound(
  $clientId,
  $clientSecret,
  $baseUrl
);

echo $accessToken;
