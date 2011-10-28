#!/usr/bin/php
<?php
session_start();
$ses = intval($_SESSION['id']);
require ('connect.php');
session_destroy();
include('index.php');
?>
