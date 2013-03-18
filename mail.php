<?php

$header="from: $_REQUEST[name] <$_REQUEST[email]>";

$mobile ="$_REQUEST[mobile]";



$enquiry="$_REQUEST[enquiry]";

// Enter your email address
$to ='annamalai.cs@gmail.com';
$send_contact=mail($to,$mobile,$message,$enquiry,$header);

// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact){
	echo "We've recived your contact information";
}
else {
	echo "ERROR";
}


$message = '<html><body>';
			
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_REQUEST['name']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_REQUEST['email']) . "</td></tr>";
			$message .= "<tr><td><strong>Mobile:</strong> </td><td>" . strip_tags($_REQUEST['mobile']) . "</td></tr>";
			$message .= "<tr><td><strong>Enquiry:</strong> </td><td>" . strip_tags($_REQUEST['enquiry']) . "</td></tr>";
			
			
			
			$message .= "</table>";
			$message .= "</body></html>";

			
			
			
			
			
			
			
			?>
