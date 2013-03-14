<?php
require_once 'lib/swift_required.php';

// Using smtp
//$transport = Swift_SmtpTransport::newInstance('my_smtp_host.com', 25)
// Using Gmail
 $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl") 
  ->setUsername('annamalai@shill.in') // or your gmail username
  ->setPassword('annamalaisekar'); // or your gmail password

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('annamalai@shill.in' => 'annamalai'))
  ->setTo(array('annamalai.cs@gmail.com'))
  ->attach(Swift_Attachment::fromPath('doc.pdf'))
  ->setBody('Here is the message itself');

$result = $mailer->send($message);
?>