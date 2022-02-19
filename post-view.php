<?php
$post = array(
    "id" => 39,
);
$data = json_encode($post);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://localhost/php-api/index.php");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: 123456789',
)
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$decoded_data = json_decode($response);
curl_close($ch);
var_dump($decoded_data);

