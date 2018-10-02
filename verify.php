<?php
$access_token = 'AR0/bSzFhBeUpDiRRHLIOUse3fFBRMzkpq9mB+EExI88Y0YyxXoIQtnxUtUAnxEOU0TWCHGlFMz2Iucq2socO4ZFu7zcQziKappHqPtJPlsIfD5yTIF7WGAnp9mySBOyqwRIv2KWyB/+Em6DKJH4WQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
