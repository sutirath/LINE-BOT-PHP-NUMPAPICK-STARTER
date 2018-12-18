<?php
$access_token = 'zm+d+U3yusffbnw7iT+OHbkVHq3AeSSdDRRNS9d1yvTD3mJdy+BjkFt5zFB6bfWjzr1/kAd3m4tLzwjVFDWwwSRwGPc7lDs0CACBIqfG5WI0RkFQkaEyfomBlubdG4Nx8nBsk0JYiXLYt4GB+Im+agdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
