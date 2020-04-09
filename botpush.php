<?php



require "vendor/autoload.php";

$access_token = 'bfn/LXDNdIvfbEubfSVBJ21bnn/zX1lrdcb0mweiJupn85cmutq/518/dyvvPI2Y6j5TkD/1z1B7eVdFdAHqDhKm2GF8uVRiuZPwwYeK/DCbZDwav4xoRPZFtc0Epaa7LaYZnMQu+R6OZ3U/7lPFTwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '668140dfa16bcdb3640c316b368b822e';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







