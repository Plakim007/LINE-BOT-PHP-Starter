<?php
$access_token = 'k8hkSyMu4vTCrKMbHGHT7Mnr6SH0pSJTrDPDxVQlwHnaZw7WPbXnCFUE8iJ++3lJ9ZkwEDvyEfj89a87FDKGnVegGezaJCAclT+3r85iwSafB/oJAm1KUGfHEFlcUxxQS28VBGrDf5xQXAZY9Vyd/gdB04t89/1O/w1cDnyilFU=';
$proxy = 'proxyurl:http://fixie:CMgHptyxrvJFJF7@velodrome.usefixie.com:80';
$proxyauth = 'username:http://fixie:CMgHptyxrvJFJF7@velodrome.usefixie.com:80';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
