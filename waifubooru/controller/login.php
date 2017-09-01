<?php 
	//Requerimiento de archivos.
	require "../config/Connection.php";

	//Variables del formulario.
	$nickname = $_POST['nickname'];
	$password = $_POST['password'];
	//Tamaños de variables de formulario.
	$NicknameLenght = strlen($nickname);
	$PasswordLenght = strlen($password);
	//Verificacion de variables
	if ($NicknameLenght < 4 OR $PasswordLenght < 6) {
		//Devolver valor de error.
		echo "Credenciales invalidas.";
	}else{
		//Correr el script de login.

		$LoginQuery = "SELECT username, password FROM users WHERE username='$nickname' AND password='$password'";
		$Result     = mysqli_query($ConnectionObject, $LoginQuery) or die ("Error:".mysql_errno());
		$Status     = mysqli_num_rows($Result);
		if ($Status > 0) {
			echo "1";
			session_start();
			$_SESSION['active'] = 1;
			$_SESSION['user']  = $nickname;
			$_SESSION['start'] = date("Y");
			header("Location: ../index.php?view=profile");
			//echo $_SESSION['user']." ".$_SESSION['start'];
		}elseif ($Status === 0) {
			echo "0";
		}
	}

 ?>