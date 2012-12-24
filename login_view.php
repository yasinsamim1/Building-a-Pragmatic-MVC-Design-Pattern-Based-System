<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Reminder System</title>
<link href="<?php echo base_url(); ?>css/reminder_style.css" rel="stylesheet" type="text/css" media="screen" title="default" />
</head>
<body id="login-bg"> 
 <!-- Start: login-holder -->
<div id="login-holder">
  <!-- start logo -->
	<div id="logo-login">
		<a href="index.html"><img src="<?php echo base_url(); ?>images/logo.png" width="156" height="40" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">

	<form action="<?php echo base_url(); ?>index.php/login_controller/validate_credentials" method="post">
		<table border="0" cellpadding="0" cellspacing="0">
		

		
		
		<tr>
			<th>Username</th>
			<td><input type="text" name="username"  class="login-inp" /></td>
		</tr>
		
		
		
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" value="******"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		
		
		
		<tr>
			<th></th>
			<td><b></b></label></td>
		</tr>

		<tr>
			<th></th>
			<td valign="top"><input type="checkbox"  id="login-check" /><label for="login-check">Remember me</label></td>
		</tr>
	
	
		
		
		<tr>
			<th></th>
			<td><input type="submit" name="submit" class="submit-login"  /><br /><?php if(isset($error)){ echo $error; } ?></td>
			
		</tr>
		

		
		
		</table>
		</form>
		
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>

 </div>
 <!--  end loginbox -->
</div>
<!-- End: login-holder -->
</body>
</html>
