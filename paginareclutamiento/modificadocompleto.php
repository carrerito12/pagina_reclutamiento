<!DOCTYPE html>
<html>
	
	<head>
		<link href="miestilo.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="estilos/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
			<title> Modificado</title>

	</head>
		
			<style type="text/css">
				button{
					margin-top: 30%;
				}

			</style>

		<body>

			<div class="w3-container w3-teal">
  				<h1>Si dejaste algun campo en blanco ya no tiene datos puestos</h1>
			</div>

			<div class="w3-container">
			  <p>Registro de errores y modificaciones hechas:</p>
			</div>
						

			<?php

			include 'conexionlocal.php';

				$guardado = $_POST['nombre'];
				
				$id_soldado = $_POST['id_soldado'];
				
				// Create connection
				$conn = mysqli_connect(servername, username, password, dbname);
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "UPDATE abastecimiento 
						SET nombre='$guardado' 
						WHERE id_soldado='$id_soldado'";

				if (mysqli_query($conn, $sql)) {
				    echo "<br>El registro se a modificado correctamente";
				} else {
				    echo "<br>Error al modificar el registro: " . mysqli_error($conn);
				}

				mysqli_close($conn);

			?>

			<?php


				$guardado = $_POST['edad'];
				
				$id_soldado = $_POST['id_soldado'];
				
				// Create connection
				$conn = mysqli_connect(servername, username, password, dbname);
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "UPDATE abastecimiento 
						SET edad='$guardado' 
						WHERE id_soldado='$id_soldado'";

				if (mysqli_query($conn, $sql)) {
				    echo "<br>El registro se a modificado correctamente";
				} else {
				    echo "<br>Error al modificar el registro: " . mysqli_error($conn);
				}

				mysqli_close($conn);

			?>

			<?php


				$guardado = $_POST['email'];
				
				$id_soldado = $_POST['id_soldado'];
				
				// Create connection
				$conn = mysqli_connect(servername, username, password, dbname);
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "UPDATE abastecimiento 
						SET email='$guardado' 
						WHERE id_soldado='$id_soldado'";

				if (mysqli_query($conn, $sql)) {
				    echo "<br>El registro se a modificado correctamente";
				} else {
				    echo "<br>Error al modificar el registro: " . mysqli_error($conn);
				}

				mysqli_close($conn);

			?>

			<?php


				$guardado = $_POST['fecha_reclutamiento'];
				
				$id_soldado = $_POST['id_soldado'];
				
				// Create connection
				$conn = mysqli_connect(servername, username, password, dbname);
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "UPDATE abastecimiento 
						SET fecha_reclutamiento='$guardado' 
						WHERE id_soldado='$id_soldado'";

				if (mysqli_query($conn, $sql)) {
				    echo "<br>El registro se a modificado correctamente";
				} else {
				    echo "<br>Error al modificar el registro: " . mysqli_error($conn);
				}

				mysqli_close($conn);

			?>

			<?php


				$guardado = $_POST['telefono'];
				
				$id_soldado = $_POST['id_soldado'];
				
				// Create connection
				$conn = mysqli_connect(servername, username, password, dbname);
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "UPDATE abastecimiento 
						SET telefono='$guardado' 
						WHERE id_soldado='$id_soldado'";

				if (mysqli_query($conn, $sql)) {
				    echo "<br>El registro se a modificado correctamente";
				} else {
				    echo "<br>Error al modificar el registro: " . mysqli_error($conn);
				}

				mysqli_close($conn);

			?>

			<?php


				$guardado = $_POST['antecedentes'];
				
				$id_soldado = $_POST['id_soldado'];
				
				// Create connection
				$conn = mysqli_connect(servername, username, password, dbname);
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "UPDATE abastecimiento 
						SET antecedentes='$guardado' 
						WHERE id_soldado='$id_soldado'";

				if (mysqli_query($conn, $sql)) {
				    echo "<br>El registro se a modificado correctamente";
				} else {
				    echo "<br>Error al modificar el registro: " . mysqli_error($conn);
				}

				mysqli_close($conn);

			?>

			<?php


				$guardado = $_POST['cod_provincia'];
				
				$id_soldado = $_POST['id_soldado'];
				
				// Create connection
				$conn = mysqli_connect(servername, username, password, dbname);
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "UPDATE abastecimiento 
						SET cod_provincia='$guardado' 
						WHERE id_soldado='$id_soldado'";

				if (mysqli_query($conn, $sql)) {
				    echo "<br>El registro se a modificado correctamente";
				} else {
				    echo "<br>Error al modificar el registro: " . mysqli_error($conn);
				}

				mysqli_close($conn);

			?>

			<p><button class="w3-button w3-block w3-black"><a href="modificacion.php">Regresar a modificacion</button></a></p>
			
		</body>
</html>