<?php
if(!isset($_GET['q']) && !isset($_GET['link'])) {
    http_response_code(401);
    die;
}

$_GET['q'] = str_replace(' ', '+', $_GET['q']);

$link = "http://egzamin-e12.blogspot.com/search?q={$_GET['q']}";
if(isset($_GET['link']))
    $link = $_GET['link'];
$c = curl_init();
curl_setopt($c, CURLOPT_URL, $link);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
echo curl_exec($c);
curl_close($c);
