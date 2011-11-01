#!/usr/bin/php
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(url,'popUpWindow','height=500,width=600,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
<html> 
<head>  
<?php 
require ('connect.php');
include('includes/header.php');?>
</head>    
<body>
<div class="">
<div class="left grid_4 text_white"><h2>Radio Player</h2></div>
<!--

  <div id="radio-player" class="radio-default">

    <!-- Audio placeholder used by jPlayer -->
<!--    <div id="player"> </div>

    <!-- Container for channel picker -->
<!--    <div id="channelPicker">
        <a tabindex="8" accesskey="l" id="paginationLeft" class="inactive"><span>Left</span></a>
        <div id="channels"> </div>
        <a tabindex="9" accesskey="r" id="paginationRight" class="active"><span>Right</span></a>
    </div>

    <!-- Container for display -->
<!--    <div id="display">
        <a id="currentChannel"><img src="gfx/default/default-station.png" /></a>
        <span id="duration"> </span>
        <span id="quality"> </span>
    </div>

    <!-- Containers for admin functions -->
<!--    <a tabindex="7" accesskey="c" id="displayChannelPicker" title="Channels"><span>Channels</span></a>
    <a id="config">Config</a>

    <!-- Containers for jPlayer actions -->
<!--    <a tabindex="3" accesskey="d" id="volumeMin" title="Mute"><span>Mute Volume</span></a>
    <a id="volume"><span>Adjust Volume</span></a>
    <a tabindex="4" accesskey="u" id="volumeMax" title="Max"><span>Max Volume</span></a>
    <a tabindex="1" accesskey="p" id="play" title="Play"><span>Play</span></a>
    <a id="pause" title="Pause"><span>Pause</span></a>
    <a tabindex="2" accesskey="s" id="stop" title="Stop"><span>Stop</span></a>

    <!-- Container for error messages -->
<!--    <div id="error">
        <h2>Error</h2>
        <p> </p>
    </div>
</div>
-->
  <div style="right:10px;top:10px;position:absolute" class="right grid_2 padding all_curves margin_right margin_top">
  <div class="h2b"><b>Categories</b></div><br>
  <div><a href="#" id="sports_link" class = "text_white" >Sports></a></div>	
  <div class="hidden" id="sports_list">
	<?php
	  $q = pg_query("SELECT * FROM stations WHERE category='sports'");
	  while($r = pg_fetch_array($q)){
	?>
	  <div class="left padding">
	  <a href="JavaScript:newPopup('http://www.doc.ic.ac.uk/project/2011/362/g1136226/web/popup.php?link=<?php echo $r[url];?>','Radioe','height=200,width=150');">
      <img src="images/<?php echo $r[image];?>" width="50" height="40" border="0" style="border:none;" alt="nrk station"/></a>	
	  </div>
	<?php
	} 
  ?>
  </div>
	<div><a href="#" id="news_link" class = "text_white" >News></a></div>	
	<div class="hidden" id="news_list">
  <?php
	$q = pg_query("SELECT * FROM stations WHERE category='news'");
	while($r = pg_fetch_array($q)){
	?>
	<div class="left padding">
		<a href="JavaScript:newPopup('http://www.doc.ic.ac.uk/project/2011/362/g1136226/web/popup.php?link=<?php echo $r[url];?>','Radioe','height=200,width=150');">
        <img src="images/<?php echo $r[image];?>" width="50" height="40" border="0" style="border:none;" alt="nrk station"/></a>	
	</div>
	<?php
	} 
	?>		
  </div>
<div class="clear margin_bottom"></div>
<br><br>
  <div class="right ">
  <div class="h2b"><b>Recommendations</b></div><br>
   <a href="JavaScript:newPopup('http://www.doc.ic.ac.uk/project/2011/362/g1136226/web/popup.php?link=http://fm999.info:8080/radio.ogg','Radioe','height=200,width=150');">
     <img src="https://market.android.com/publish/images/PAAAAFU5e_aGviKzMqSXrN3MCJ_meSbQUucSngyjnapfgiX17exF5tL07OEHvG-pc4l8SJXabLApX3Dkyp67qRU538AAzfqVaZuw_kx5yMZ9HoTfd-IK08heY3Mh.png" 
          width="50" height="40" border="0" style="border:none;" alt="nrk station" />
   </a>
  </div>
  </div>
<audio autoplay="autoplay" style="left:10px;bottom:10px;position:absolute" src="<?php echo $_GET[link];?>" controls preload> </audio>
</div>
</body>
</html>
