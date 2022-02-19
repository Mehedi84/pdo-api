<?php
$post = array(
	"user_name" => "user_name",
	"user_pass" => "user_pass",
	"user_email"   => "user_email",
	"user_group_id"   => "user_group_id",
	"previlege"   => 5,
);
$data = json_encode($post);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://localhost/php-api/create.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	'Authorization: 123456789',
)
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);

curl_close ($ch);
var_export($server_output);
