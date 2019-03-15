<?php
if(!isset($_GET['q'])) {
    http_response_code(401);
    die;
}

$_GET['q'] = str_replace(' ', '+', $_GET['q']);

$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://egzamin-e12.blogspot.com/search?q={$_GET['q']}");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
echo curl_exec($c);
curl_close($c);