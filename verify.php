<?php
$access_token = '76e+98oq6oDHMvLf2LCBlWiMxNn0q70QpA1VmNpC2dJHfdjXmwVyo/iN8pbHbrcsGCQX4mL7h0ivr3gZQHuOme/IGN424ki55qFkcafN9PMml7GrVq20oeLYSkiz21WYdjsENHIB1/BCsHypqz87NQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
