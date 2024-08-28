<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://accounts.zoho.in/oauth/v2/token?refresh_token=1000.79350894151a6d446b8f782c7a9a7f01.1a88831c30b9b3ad120ae7dbed00be1f&client_id=1000.FMKDOXOCOHH4RIQOHT1U8CZT3VCE1O&client_secret=5fe15d171902a3cfa37e6e9039717cc7300dbc2176&grant_type=refresh_token',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
