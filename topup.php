<?php
include "accesstoken.php";
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://topups-sandbox.reloadly.com/topups',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
	"operatorId":"341",
	"amount":"17",
	"useLocalAmount": false,
	"customIdentifier": "This is example identifier 092",
	"recipientPhone": {
		"countryCode": "NG",
		"number": "08147658721"
	},
	"senderPhone": {
		"countryCode": "CA",
		"number": "1231231231"
	}
}',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $access_token,
        'Accept: application/com.reloadly.topups-v1+json',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;
echo  var_dump(json_decode($response));