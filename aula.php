<?php

$url = 'https://www.codever.dev/api/public/bookmarks';
$fp = fopen($url, 'r');

$resp = stream_get_contents($fp);
// $meu_obj = json_decode($resp);

// PARSING
echo 'O resultado é: ' . $resp;