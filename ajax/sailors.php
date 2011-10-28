#!/usr/bin/php
<?php
		@session_start();
		include('../connect.php');
		$ses = intval($_SESSION['id']);
		$q = @pg_query("SELECT * FROM sailors WHERE sailor_to='".$ses."' AND approved='0'") or die(pg_last_error());
		$n = @pg_num_rows($q);
		if ($n > 0){
		echo '<span class="notification">'.$n.'</span>';
		}
?>
