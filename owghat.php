<?php
$url = "https://one-api.ir/owghat/?token=607204:6a93e20962f3a&city=%D8%B4%DB%8C%D8%B1%D8%A7%D8%B2&en_num=true";
$data = file_get_contents('$url');
$json = json_decode('$data');
echo $json->result->ghorob_aftab;
?>