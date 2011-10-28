#!/usr/bin/php
<?php
		@session_start();
		include('../connect.php');
		include('../functions/functions.php');

$q = pg_query("SELECT * FROM messages WHERE ((message_from=$_POST[partner] AND message_to=$_SESSION[id]) OR (message_to=$_POST[partner] AND message_from=$_SESSION[id])) AND message_time > $_POST[last_time] ORDER BY message_time ASC");
while($r = pg_fetch_array($q)){
?>
<div class="conversation_box center grid_7c padding col_grey all_curves box_shadow margin_center margin_bottom_10 font_16">
<?php
$img = 'inbox.png';
$name = $r[message_from];
if ($r[message_from] == $_SESSION[id]){
$img = 'sent.png';
$name = $_SESSION[id];
}
?>
<img src="images/<?php echo $img;?>" aling="left" class="left">
<?php
echo '<b>'.name_by_id($name) .'</b><br>';
?>
<div class="left"><?php
echo $r[message_text];
?></div>
<div class="right"><?php
echo date("d M Y",$r[message_time]) .' at ' .date("H:i",$r[message_time]);
?></div>
<div class="clear"></div>
</div>
<?php
$last = $r[message_time];
}
?>
<script>
$('#last_time').val(<?php echo $last;?>);
</script>
