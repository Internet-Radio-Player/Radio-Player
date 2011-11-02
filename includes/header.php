<title>Radio Player</title> 
  <link href="images/s4.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/global-style.css" />
	<link rel="stylesheet" type="text/css" href="css/forms.css" />
	<link rel="stylesheet" type="text/css" href="css/grid.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--  <link href="css/default.css" rel="stylesheet"> -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=UnifrakturCook:bold' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.backstretch.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link rel="stylesheet" href="css/smoothness/jquery-ui-1.8.13.custom.css">
	<link rel="stylesheet" href="css/smoothness/jquery.ui.dialog.css">
	<link rel="stylesheet" href="css/smoothness/jquery.ui.resizable.css">
	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.mouse.js"></script>
	<script src="js/jquery.ui.draggable.js"></script>
	<script src="js/jquery.ui.position.js"></script>
	<script src="js/jquery.ui.resizable.js"></script>
	<script src="js/jquery.ui.dialog.js"></script>
	<script src="js/jquery.ui.dialog.js"></script>
	<script src="js/jquery.ui.progressbar.js"></script>
	<script src="script/jplayer-1.2.0/jquery.jplayer.js"> </script>
<script src="script/player.js"> </script>
	
	<script type="text/javascript">  
		$(document).ready(function(){
		$.backstretch("images/bg.jpg");
		});
		
		$('#register').live('click',function(){
			if ( ($('#username').val().length!=0) && ($('#email').val().length!=0)){
				if ($('#pass1').val().length > 3){
				if (($('#pass1').val() != $('#pass2').val()) && ($('#pass1').val() != '')){
					$('#error').html('Passwords mismatch');
					return false;
				}
				}else{
					$('#error').html('Password is weak.');
					return false;
				}
			}
		})
		
		$('#forgot_link').live('click',function(){
			$('#forgot_password').fadeToggle();
			$('#error_login').hide();
		})
		
		$('#sports_link').live('click',function(){
		  $('#sports_list').fadeToggle() ;
		})
		
		$('#news_link').live('click',function(){
		  $('#news_list').fadeToggle() ;
		})

		$('#music_link').live('click',function(){
		  $('#music_list').fadeToggle() ;
		})

</script> 
