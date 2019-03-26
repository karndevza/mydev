<?php
//Channel access token (long-lived) 
$access_token = 'EPdYLxLxfTdrNal8Y/a3ihGIXvD6Ky8NmiJPuCsuyYrZiLUwB5bPiLBj6KYEcQPGEzJ7dJbnwI8Bscjama6bmGhveZW+507g2YGKNm7d4N/+ee5ESR8i6ZGdISsP6aEuSJdKHmQUkwrDExNCjCYocAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
