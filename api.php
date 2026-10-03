<?php
$url = "https://api.genderize.io/?name=sara";
$data = file_get_contents($url);
$json = json_decode($data);
echo $json->name ." is ". $json->gender . $json->probability;
?>