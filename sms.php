<?php
// this line loads the library 
require('twilio/Services/Twilio.php'); 

$account_sid = 'AC0fcc9f597aa9b012d6158db0fe2fb484'; 
$auth_token = '15210e0f779b6f18723bd8d433ed19ab'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$client->account->messages->create(array( 
	'To' => "9172164313", 
	'From' => "+19292003130", 
	'Body' => "Hello from Enrique Paz",   
));

echo 'Message succesfully sent';
?>