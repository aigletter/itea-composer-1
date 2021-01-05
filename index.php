<?php

use src\Multiple;

require 'vendor/autoload.php';
require 'vendor/k1ngp1n/math/Multiple.php';
//use GuzzleHttp\Client;
//
//$client = new GuzzleHttp\Client();
//$response = $client->request('GET', 'https://itea.ua/');
//echo $response->getBody();
//use math\src\Multiple;

$tmp = new Multiple();
echo "Sum: " . $tmp->sum(10,20) . "\n";