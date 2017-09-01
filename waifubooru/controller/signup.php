<?php 
	//Require.
	require "../config/Connection.php";

	//Valores de variables.
	$nickname  = $_POST['txtnickname'];
	$email      = $_POST['txtemail'];
	$password   = $_POST['txtpassword'];
	$repassword = $_POST['txtrepassword'];
	$uniqid     = uniqid().rand(10000, 90000);
	//Tamaño de variables.
	$nicknamelength   = strlen($nickname);
	$emaillenght      = strlen($email);
	$passwordlength   = strlen($password);
	$repasswordlength = strlen($repassword);
	//Verificación de las variables.
	if ($nicknamelength < 6 OR $emaillenght < 8 OR $passwordlength < 6) {
	     //Error en el tamaño de los inputs
		 echo "1";
	}else if($password === $repassword){
		//Error, diferencia entre los dos campos de las contraseñas.
		echo "2";
	}else{
		//Verificación finalizada.
		$SignupQuery = "INSERT INTO users (username, password, email, activationid) VALUES ('$nickname','$email','$password', '$uniqid')";
		$Result      = $ConnectionObject ->query($SignupQuery);
		//Verifiación del registro.
		if ($Result) {
			//Retorna el valor correcto.
			echo "3";
		}
	}
 ?>