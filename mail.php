<?php

$header="from: $_REQUEST[name] <$_REQUEST[email]>";

$mobile ="$_REQUEST[mobile]";



$enquiry="$_REQUEST[enquiry]";

// Enter your email address
$to ='annamalai.cs@gmail.com';
$send_contact=mail($to,$mobile,$enquiry,$header);

// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact){
	echo "We've recived your contact information";
}
else {
	echo "ERROR";
}
?>

