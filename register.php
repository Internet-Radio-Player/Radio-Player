#!/usr/bin/php
<?php
require('connect.php');
$username = $_POST[r_u];
$email = $_POST[r_e];
$pass1 = $_POST[r_p];
$pass2 = $_POST[r_r_p];
$len = strlen($pass1);
if($username != '' && $email != '' ){
	if ($len <= '3' ){
		$error = '<p class="text_red">Password is weak </p>';
		include('index.php');
		die();
	} 

	if ($pass1 != $pass2){
		$error = '<p class="text_red">Passwords mismatch</p>';
		include('index.php');
		die();
	}
}
$result = pg_num_rows(pg_query("SELECT * FROM users WHERE username='$username'"));
if($result == 1){
    $error = '<p class="text_red">The username you have chosen already exists!</p>';
	include('index.php');
	die();
}
else
        {
	$q = pg_query("SELECT * FROM users ORDER BY userid DESC");
	$r = pg_fetch_array($q);
	$last = $r[userid];
	$last++;
        pg_query("INSERT INTO users (userid, username, password, email) 
	VALUES ($last, '$username', '$pass1', '$email')");
	$to  = $email;
// subject
$subject = 'Welcome to Internet Radio Player';
// message
$message = "
<html>
<head>
  <title>Welcome to Internet Radio Player</title>
</head>
<body>
	Dear $username,<br><br>
  <p>Thank you for your registration.</p>Your login details:<br>
  Username: $username<br>
  Password: $pass1<br><br>
  Enjoy!<br><br>  
  Thank you,<br>
  The Internet Radio Player Team<br>
  __________________________________<br>
  THIS IS AN AUTOMATED RESPONSE. <br>
***DO NOT RESPOND TO THIS EMAIL***<br>
  
  
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "To: $details[username] <$to>" . "\r\n";
$headers .= 'From: Internet Radio Player <info@radioplayer.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
        $error = '<p class="text_green"> Registration complete. </p>';
		include('index.php');
	}
?>
