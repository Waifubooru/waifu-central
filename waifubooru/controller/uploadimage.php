<?php 
	//Abre datos de sesión.
	session_start();
	//Archivos que se requieren.
	require "../config/Connection.php";
	//Variables del formulario.
	$title     = $_POST['title']; 
	$user      = $_SESSION['user'];
	$imageTMP  = $_FILES['file']['tmp_name'];
	$imageName = $_FILES['file']['name'];
	$imageType = $_FILES['file']['type'];
	//Variables de paths.
	$imagePath      = "images/";
	$imagePath2     = "../images/";
	$imagePathRec   = $imagePath.$imageName;
	$imagePathRec2  = $imagePath2.$imageName;
	//Verificación del tamaño del titulo.
	if(strlen($title) < 4) {
		//Error en el tamaño del titulo de la imagen.
		echo "1";
	}else{
		$UploadimageSQL = "INSERT INTO images (imagename, title ,user) VALUES ('$imagePathRec', '$title' ,'$user')";
		$Result         = mysqli_query($ConnectionObject, $UploadimageSQL);
		$Uploaded       = move_uploaded_file($imageTMP, $imagePathRec2);
		if ($Result AND $Uploaded) {
			echo "Image was correctly uploaded.";
		}else{
			echo "Error:";
		}
	}


 ?>
