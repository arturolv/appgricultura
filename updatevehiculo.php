

    <?php
	
	require 'db.php';
    $imagen = $_POST['imagen'];
	$num_bastidor = $_POST['num_bastidor'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$contr_homologacion = $_POST['contr_homologacion'];
    $procedencia = $_POST['procedencia'];
    $gasolina = $_POST['gasolina'];
    $usuarios_username = $_POST['usuarios_username'];
    $cultivos_idcultivo = $_POST['cultivos_idcultivo'];

	$sql = "UPDATE vehiculos SET imagen='$imagen', num_bastidor='$num_bastidor', marca='$marca', modelo='$modelo', contr_homologacion='$contr_homologacion', procedencia='$procedencia', gasolina='$gasolina', usuarios_username='$usuarios_username', cultivos_idcultivo='$cultivos_idcultivo' WHERE num_bastidor = '$num_bastidor'";
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
						<h3>VEHÍCULO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="listadovehiculos.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>


