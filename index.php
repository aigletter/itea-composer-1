<?php
require_once 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new GuzzleHttp\Client();
$response = $client->request('GET', 'https://itea.ua/');
echo $response->getBody();