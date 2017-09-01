<?php 
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Signup</title>
 	<script type="text/javascript" src="js/main.js"></script>
 </head>
 <body>
 	<form method="POST" action="controller/signup.php">
 		<input type="text" name="txtnickname">
 		<input type="email" name="txtemail">
 		<input type="password" name="txtpassword">
 		<input type="password" name="txtrepassword">
 		<input type="checkbox" name="cbxacept">
 		<input type="submit" name="submit" value="Signup" onclick="">
 	</form>
 </body>
 </html>