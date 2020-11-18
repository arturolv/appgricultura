

    <?php
	
	require 'db.php';
    $idcultivo = $_POST['idcultivo'];
	$cultivo = $_POST['cultivo'];
	$tamaño = $_POST['tamaño'];
    $usuarios_username = $_POST['usuarios_username'];

	$sql = "UPDATE cultivos SET idcultivo='$idcultivo', cultivo='$cultivo', tamaño='$tamaño', usuarios_username='$usuarios_username' WHERE idcultivo = '$idcultivo'";
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
						<h3>CULTIVO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="listadocultivos.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>


