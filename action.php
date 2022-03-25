<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

$content=file_get_contents('php://input');
$data=json_decode($content);
$link=$data->url;
$key=$data->key;
$url="http://65.1.132.160:8080/getInsta/?url=$link&key=$key";

$response=file_get_contents($url);
echo $response;