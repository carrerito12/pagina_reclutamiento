<!DOCTYPE html>
<html>
	
	<head>
		<link href="miestilo.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="estilos/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
			<title>Nuevo registro</title>

	</head>
		<style>

			.hecho{
	background-color: #B0AFAF;
 	border-radius: 25px;
 	color: white;
 	z-index: 30;
 	position: absolute;
 	margin-top: -800px;
 	margin-left: 500px;
 	margin-right: -400px;
 	padding: 20px;
 	color: black;
 	border-style: solid;
 	font-weight: 900;
			}

		</style>	
	

		<body>
			

			<?php

			

				$nombre = $_REQUEST['nombre'];
				$edad = $_REQUEST['edad'];
				$email = $_REQUEST['email'];
				$fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
				$telefono = $_REQUEST['telefono'];
				$fecha_reclutamiento = $_REQUEST['fecha_reclutamiento'];
				$antecedentes = $_REQUEST['antecedentes'];
				$codigoprovincia = $_REQUEST['codigoprovincia'];
							
				$target_dir = "uploads/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				$nombreFoto=$_FILES['fileToUpload']['name'];
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

                 	// Create connection
				    $conn = mysqli_connect(servername, username, password, dbname);
				    
				    // Check connection
				    if (!$conn) {
				        die("Connection failed: " . mysqli_connect_error());
				    }
				    

                $sql = "INSERT INTO abastecimiento (nombre, edad, email, fecha_nacimiento, telefono, fecha_reclutamiento, fotos, antecedentes, cod_provincia) 
                VALUES('$nombre','$edad','$email','$fecha_nacimiento','$telefono','$fecha_reclutamiento','$nombreFoto','$antecedentes','$codigoprovincia')";
             	

             	if (mysqli_query($conn, $sql)) { //usamos esto para confirmar y ver el id que se a creado en la base de datos
				    $last_id = mysqli_insert_id($conn);
				    echo "<div class='hecho'>¡FELICIDADES, HAS INGRESADO A LA TROPA CORRECTAMENTE!</div>";
				    echo "<div class='hecho'>Los datos se han insertado correctamente. Tu identificacion de soldado es: " . $last_id . "</div>"; //mensaje afirmando que la introduccion de datos esta bien hecha
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn); //si hay algun error en la conexion lo muestra y dice cual fue el error 
				}

				mysqli_close($conn); //cerramos la conexion


			?>
			
		</body>
</html>