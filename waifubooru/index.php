<?php 
	//Sesión abierta
	session_start();
	//------------------------------------
	if (isset($_SESSION['active'])) {
		//Variable de sesión activa
		$Active = "1";
	}else{
		//Variable de sesión inactiva
		$Active = "0";
	}
	//------------------------------------
	if(isset($_GET['view'])){
		//Variables de view si existe
		$View = $_GET['view'];
	}else{
		//Variable de view no existe
		$View = "home";
	}
	//------------------------------------
	ViewEngine($View, $Active);


	//Función erutadora de vistas.
	function ViewEngine($_view, $_session)
	{	
		echo $_session;
		//Verificaciones de sesión
		if ($_session > "0") {
			//Caso sesión activa
			$FiletoInclude = "view/".$_view."_a/".$_view.".php";
			if (file_exists($FiletoInclude)) {
				include($FiletoInclude);
			}else{
				echo "404";
			}

		}else{
			//Caso sesión inactiva
			$FiletoInclude = "view/".$_view."_i/".$_view.".php";
			if (file_exists($FiletoInclude)) {
				include($FiletoInclude);
			}else{
				echo "404";
			}
		}
	}
	//------------------------------------

 ?>
 