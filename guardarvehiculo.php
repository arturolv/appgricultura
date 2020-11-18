
<?php
	
	require 'db.php';
	
	
//datos del arhivo
$nombre_archivo = $_FILES['imagen']['name'];
$tipo_archivo = $_FILES['imagen']['type'];
$tamano_archivo = $_FILES['imagen']['size'];
$uploads_dir = 'images';
//compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")|| strpos($tipo_archivo, "png")) && ($tamano_archivo < 10000000))) {
   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
}else{
   	if (move_uploaded_file($_FILES['imagen']['tmp_name'], "$uploads_dir/$nombre_archivo")){
      		echo "";
   	}else{
      		echo "";
   	}
}

	$imagen = $nombre_archivo;
	$num_bastidor = $_POST['num_bastidor'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$contr_homologacion = $_POST['contr_homologacion'];
	$procedencia = $_POST['procedencia'];
	$gasolina = $_POST['gasolina'];
	$usuarios_username = $_POST['usuarios_username'];
	$cultivos_idcultivo = $_POST['cultivos_idcultivo'];

	$sql = "INSERT INTO vehiculos (imagen, num_bastidor, marca, modelo, contr_homologacion, procedencia, gasolina, usuarios_username, cultivos_idcultivo) VALUES ('$imagen', '$num_bastidor', '$marca', '$modelo', '$contr_homologacion', '$procedencia', '$gasolina', '$usuarios_username',  '$cultivos_idcultivo')";
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
						<h3>VEHÍCULO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="listadovehiculos.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
<?php

