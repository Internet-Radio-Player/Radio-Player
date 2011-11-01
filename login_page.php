<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Codes by Quackit.com -->
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=500,width=600,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>


<html> 
<head>  
<?php include('includes/header.php');?>
</head>   
<body>
<div class="">
	<div class="left grid_4 text_white"><h2>Welcome to JB Radio Player</h2></div>
   <div class="right">
 <!--Register --> 
	<div id="box" class="text_black padding left_curves box_shadow grid_2 right">
	<div class="text_center margin_top_10 text_white bold"><h3>Register</h3></div>
	<div class="hrimg margin_top margin_bottom"></div>
	<form action="register.php" method="post" name="regForm" id="regForm">
			<div class="left grid_2 bold text_white">Username:<span class="text_red"> *</span> </div>
			<div class="clear margin_bottom"></div>
			<div class="left grid_2">
				<input name="r_u" type="text" size="25" class="required grid_1f" required="required">
			</div>
			<div class="clear margin_bottom"></div>
			<div class="left grid_2 bold text_white">Email:<span class="text_red"> *</span> </div>
			<div class="clear margin_bottom"></div>
			<div class="left grid_2">
				<input name="r_e" type="email" size="25" class="required grid_1f" required="required">
			</div>
			<div class="clear margin_bottom"></div>
			<div class="left grid_2 bold text_white">Password:<span class="text_red"> *</span></div>
			<div class="clear margin_bottom"></div>
			<div class="left grid_2">
				<input name="r_p" type="password"  size="25" class="required password grid_1f" required="required" id="pass1">
			</div>
			<div class="clear margin_bottom"></div>
			<div class="left grid_2 bold text_white">Retype Password:<span class="text_red"> *</span> </div>
			<div class="clear margin_bottom"></div>
			<div class="left grid_2">
				<input name="r_r_p" type="password" size="25" class="required grid_1f" required="required" id="pass2">
			</div>
			
			<div class="clear margin_bottom"></div>	

			<div class="text_red font_16" id="error"><?php echo $error ;?></div>
			<div class="">
			<div class="hrimg margin_top margin_bottom"></div>
			<button class="button button-gray bold" type="submit" id="register">Register Now!</button>
		</div>				  
	</div> 	
	</form>	 
<!-- Login Box -->
	<div id="box"class="text_black padding right_curves box_shadow grid_2 right">
		<div class="text_center margin_top_10 text_white bold"><h3>Login</h3></div>
		<div class="hrimg margin_top margin_bottom"></div>
		<form action="login.php" method="post" name="logForm" id="logForm">
				<div class="left grid_2 bold text_white">Username | E-mail:</div>
				<div class="clear margin_bottom"></div>
				<div class="left grid_2">
				<input name="username" value="<?php echo $_POST[username];?>" type="text" id="txtbox" size="25" class="required grid_1f">
				</div>
				<div class="clear margin_bottom"></div>
				<div class="left grid_2 bold text_white">Password: </div>
				<div class="clear margin_bottom"></div>
				<div class="left grid_2">
					<input name="userpass" type="password"  id="txtbox" size="25" class="required password grid_1f">
				</div>
				<div class="clear margin_bottom"></div>
				<div class="hrimg margin_top margin_bottom"></div>
				<div class="clear"></div>
				<div class="left grid_b">
				<button class="button button-gray bold " type="submit">Login!</button>
				</div>	
				<div class="left grid_1b  text_right bold margin_top"><a href="#" id="forgot_link" class = "text_white" >Forgot Password</a></div>	
				</form>
				<form action="forgot.php" method="post">
				<div class="hidden" id="forgot_password">
				
				<div class="left grid_2 bold text_white margin_top">Email Address: </div>
				<div class="clear margin_bottom"></div> 
				<div class="left grid_2">
					<input name="email_forgot" type="email"  id="txtbox" size="25" class="required password grid_1f">
				</div>
				<div class="clear"></div>
				<button class="button button-gray bold margin_top" type="submit">Send</button>
				<div class="clear margin_bottom"></div>
				
				</div>
				
				</form>
				<div class="clear"></div>
				<div class="text_red font_16" id="error_login"><?php echo $error_login;?></div>
	  </div> 
  </div>
    <div class="left grid_2 padding all_curves margin_left">
      <div class="text_center h2b"><b>Sports</b></div><br>
      <a href="JavaScript:newPopup('http://www.doc.ic.ac.uk/project/2011/362/g1136226/web/popup.php');">
        <img src="https://market.android.com/publish/images/PAAAAFU5e_aGviKzMqSXrN3MCJ_meSbQUucSngyjnapfgiX17exF5tL07OEHvG-pc4l8SJXabLApX3Dkyp67qRU538AAzfqVaZuw_kx5yMZ9HoTfd-IK08heY3Mh.png" 
            width="50" height="40" border="2" style="border:2px solid black;" alt="nrk station" />
      </a>
    </div>
    <div class="left grid_2 padding all_curves margin_left">
      <div class="text_center h2b"><b>News</b></div><br>
      <a href="JavaScript:newPopup('http://www.doc.ic.ac.uk/project/2011/362/g1136226/web/popup.php');">
        <img src="https://market.android.com/publish/images/PAAAAFU5e_aGviKzMqSXrN3MCJ_meSbQUucSngyjnapfgiX17exF5tL07OEHvG-pc4l8SJXabLApX3Dkyp67qRU538AAzfqVaZuw_kx5yMZ9HoTfd-IK08heY3Mh.png" 
            width="50" height="40" border="2" style="border:2px solid black;" alt="nrk station" />
      </a>
    </div>
    <div class="left grid_2 padding all_curves margin_left">
      <div class="text_center h2b"><b>Music</b></div><br>
      <a href="JavaScript:newPopup('http://www.doc.ic.ac.uk/project/2011/362/g1136226/web/popup.php');">
        <img src="https://market.android.com/publish/images/PAAAAFU5e_aGviKzMqSXrN3MCJ_meSbQUucSngyjnapfgiX17exF5tL07OEHvG-pc4l8SJXabLApX3Dkyp67qRU538AAzfqVaZuw_kx5yMZ9HoTfd-IK08heY3Mh.png" 
            width="50" height="40" border="2" style="border:2px solid black;" alt="nrk station" />
      </a>
    </div>
<div class="font_12 text_white bold text_italic" id="footer"><h4> &copy; Radio Player | 2011</h4></div>	
</div>
</body>
</html>



