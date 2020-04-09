<?php
$access_token = 'bfn/LXDNdIvfbEubfSVBJ21bnn/zX1lrdcb0mweiJupn85cmutq/518/dyvvPI2Y6j5TkD/1z1B7eVdFdAHqDhKm2GF8uVRiuZPwwYeK/DCbZDwav4xoRPZFtc0Epaa7LaYZnMQu+R6OZ3U/7lPFTwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
