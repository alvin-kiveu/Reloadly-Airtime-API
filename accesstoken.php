<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://auth.reloadly.com/oauth/token',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
	"client_id":"6nPH3eoVKQHkUhFmTkUo1yemrRdkdJVX",
	"client_secret":"xGrfsymCla-Jm8sSe7hH8eD91Au2QA-xkKDJeoD2mASuwnKjsmtLWlUMxYeJuss",
	"grant_type":"client_credentials",
	"audience":"https://topups-sandbox.reloadly.com"
}',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);
$data = json_decode($response);
$access_token = $data->access_token;