#!/usr/bin/php
<?php
session_start();
require ('connect.php');
if (isset($_SESSION[id])){
include ('home.php');
}else{
include('login_page.php');
}
?>
