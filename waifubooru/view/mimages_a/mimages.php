<?php 
	//session_start();
	$User = $_SESSION['user'];
	function ShowImages($_user){
		require "config/Connection.php";
		$ImagesSQL = "SELECT * FROM images WHERE user='$_user'";
		$Result    = mysqli_query($ConnectionObject, $ImagesSQL);
		$Ammount   = mysqli_num_rows($Result);
		while ($Rows = $Result-> fetch_assoc()) {
			$Imagepath = $Rows['imagename'];
			$Title     = $Rows['title'];
			$User      = $Rows['user'];
			echo '<div><b>'.$Title.'</b><b> By '.$User.'</b></div><br>';
			echo '<img src="'.$Imagepath.'" width="50%" heigh="50%">';
			echo "<hr><hr><hr><br><br>";
		}
		echo $Ammount." results.";
	}
 ?>

<!DOCTYPE html>
<html>
<head>	
	<title>Images of <?php echo $User;?></title>
</head>
<body>
	<hr>
	<br>
	<h1 align="center">Subir una nueva imagen</h1>
	<form method="post" action="controller/uploadimage.php" enctype="multipart/form-data">
		<input type="text" name="title" placeholder="Image title">
		<input type="file" name="file">
		<input type="submit" name="submit" value="Upload Image">
	</form>
	<hr>
	<br>
	<?php 
		ShowImages($User);
	 ?>
</body>
</html>