<?php 
	//Constantes de conexión.
	Define('HOST', 'localhost');
	Define('USER', 'root');
	Define('PASS', '');
	Define('DATA', 'waifubooru');
	//Objeto de conexión.
	$ConnectionObject = mysqli_connect(HOST, USER, PASS, DATA) or die ("Error: ".mysql_errno());
 ?>