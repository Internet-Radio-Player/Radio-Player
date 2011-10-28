#!/usr/bin/php
<?php
session_start();
require ('connect.php');
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['userpass'];
$result = pg_query("SELECT * FROM users WHERE (username='$myusername' OR email='$myusername') AND password='$mypassword'") or die(pg_last_error());
$row = pg_fetch_array($result);
$count = pg_num_rows($result);
// pg_num_row is counting table row
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login.php"
$_SESSION[username] = $myusername;
$_SESSION[id] = $row[userid]; 
header("location:index.php");
}else{
$error_login = 'Wrong username or password';
include('index.php');
}
?>
