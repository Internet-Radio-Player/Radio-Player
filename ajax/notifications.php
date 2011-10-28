#!/usr/bin/php
<?php
		@session_start();
		include('../connect.php');
		$ses = intval($_SESSION['id']);
		$find_details = @pg_query("SELECT * FROM users WHERE userid='".$ses."'");
		$row_details = @pg_fetch_array($find_details);
		$last_inbox = $row_details[last_inbox];
		$q = @pg_query("SELECT * FROM messages WHERE message_to='".$ses."' AND message_time > $last_inbox");
		$n = @pg_num_rows($q);
		if ($n > 0){
		echo '<span class="notification" id="notification_box">'.$n.'</span>';
		}
?>
