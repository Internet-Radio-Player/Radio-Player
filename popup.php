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
  <div style="right:10px;top:10px;position:absolute" class="right grid_2 padding all_curves margin_right margin_top">
  <div class="h2b"><b>Categories</b></div><br>
	<?php
	$p = pg_query("SELECT DISTINCT category FROM stations");
	while($s = pg_fetch_array($p)){
	$cat=$s[category];
	$cat_link=$cat."_link";
	$cat_list=$cat."_list";
	?>
	<div class="clear margin_bottom"></div>
	<div><a href="#" id="<?php echo $cat_link;?>" class = "text_white" ><?php echo $s[category];?>></a></div>	
  	<div class="hidden" id="<?php echo $cat_list;?>">
  	<?php
	$q = pg_query("SELECT * FROM stations WHERE category='$cat'");
	while($r = pg_fetch_array($q)){
	?>
	<div class="left padding">
		<a href="JavaScript:newPopup('http://www.doc.ic.ac.uk/project/2011/362/g1136226/web/popup.php?link=<?php echo $r[url];?>','Radioe','height=200,width=150');">
        <img src="images/<?php echo $r[image_url];?>" width="50" height="40" border="0" style="border:none;" alt="nrk station"/>
    	</a>	
	</div>
	
	<?php
	} 
	?>
	</div>
	<?php
	} 
	?>
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
