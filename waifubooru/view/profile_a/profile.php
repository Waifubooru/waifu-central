<?php 
	//Acceder a variables de sesión
	//
	//Momentaneo
	$Username = $_SESSION['user'];
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile of <?php echo $Username;?></title>
 </head>
 <body>
 	<h1 align="center"><a href="controller/logout.php">Logout</a></h1>
 </body>
 </html>