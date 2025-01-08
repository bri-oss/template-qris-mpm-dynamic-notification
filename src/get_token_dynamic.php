<?php

require 'utils.php';

// url path values
$baseUrl = 'https://api.bridex.qore.page/mock'; //base url

try {
  list($clientId, , $privateKey) = getCredentials();

  $accessToken = getAccessToken(
    $clientId,
    $baseUrl,
    $privateKey
  );

  echo $accessToken;
} catch (Exception $e) {
  error_log('Error: ' . $e->getMessage());
  exit(1);
}
