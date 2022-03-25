<?php 
$url = "d";
$key = "video";

$response = file_get_contents("https://insta-dates.herokuapp.com/getInsta/?url=$url&key=$key");

echo $response;