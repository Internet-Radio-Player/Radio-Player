#!/usr/bin/php
<?php
$to  = 'alexia.christophide@gmail.com';
$subject = 'New Email From Aegean Pirates Game';
$message = "
<html>
<head>
  <title>New Email</title>
</head>
<body>
<b>Full Name:</b>$_POST[name]<br>
<b>Email:</b>$_POST[email]<br>
<b>Message:</b>$_POST[message]<br>
</body>
</html>
";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "To: Pirates Game <$to>" . "\r\n";
$headers .= 'From: '.$_POST[name].'<'.$_POST[email].'>' . "\r\n";
mail($to, $subject, $message, $headers); 
?>
