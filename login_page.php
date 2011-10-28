<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html> 
<head> 
<?php include('includes/header.php');?>
</head>   
  
<body>
<div class="">
 <!--Register --> 
	<div id="box" class="text_black padding left_curves box_shadow grid_2 left">
	<div class="text_center margin_bottom text_white bold"><h3>Register</h3></div>
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
	<div id="box"class="text_black padding right_curves box_shadow grid_2 left">
		<div class="text_center margin_bottom text_white bold"><h3>Login</h3></div>
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
<div class="font_12 text_white bold text_italic" id="footer"><h4> &copy; Radio Player | 2011</h4></div>	
</div>
</body> 
</html>
