<?php
	
	require 'db.php';

	
	//Eliminar el archivo de imagen almacenada en la carpeta images
	$idcultivo = $_GET['idcultivo'];


	$sql = "DELETE FROM cultivos WHERE idcultivo = '$idcultivo'";
	$resultado = mysqli_query($con, $sql);
	
?>
 
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERROR AL ELIMINAR</h3>
				<?php } ?>
				
				<a href="listadocultivos.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>