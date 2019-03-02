<?php
$access_token = 'XHg1JQXVfTd+6/J4dOyQ3Me/CQ57DKTG/TdNvGaoOq3ipu4H33KCb71darXeWIkyGCQX4mL7h0ivr3gZQHuOme/IGN424ki55qFkcafN9PNVOETr74pENZP9PBbuelc5tCpH+yUQ/dHfoBehI5pWwwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
