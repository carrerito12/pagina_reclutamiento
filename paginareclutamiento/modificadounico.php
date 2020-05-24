<!DOCTYPE html>
<html>
	
	<head>
		<link href="miestilo.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="estilos/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
			<title>Registro unico para modificar</title>

	</head>
		
			<style type="text/css">
				.separacion{
					margin-top: 5%;
				}
				.modificadores{
					background-color: #90F7F7;
					margin-top: 2%;
					margin-right: 40%;
					margin-left: 40%;
					border-radius: 25px;
					border: solid black
					
				}
				
			</style>

		<body>
			

			<?php

			$id_soldado=$_GET['id_soldado'];

			include 'conexionlocal.php';
			
			 $conn = new mysqli(servername, username, password, dbname) or 
				// Check connection or
				    die("Problemas con la conexión");

					$sql = "SELECT * 
							FROM abastecimiento
							WHERE id_soldado = '$id_soldado'"; //esta es la consulta que se va a hacer si se quiere hacer otra estos valores hay que cambiarlos

					
					$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					     
					     	echo "<div class='modificadores'";
					   		echo "<div align='center'>";
					        echo      $row["fotos"] . "<br>";
					      	echo	  $row["id_soldado"] . "<br>";
					      	echo	  $row["nombre"] . "<br>";
					      	echo	  $row["edad"] . "<br>";
					      	echo	  $row["email"] . "<br>";
					      	echo	  $row["fecha_nacimiento"] . "<br>";
					      	echo	  $row["telefono"] . "<br>";
					      	echo	  $row["fecha_reclutamiento"] . "<br>";
					      	echo	  $row["antecedentes"] . "<br>";
					      	echo	  $row["cod_provincia"] . "<br>";
					      	echo "</div>";
					 
					      	?>

					      	<?php


					      	$id_soldado = $_GET['id_soldado'];
					      	

					      	?>

								<div class="separacion"><div class="w3-container w3-orange">
								  <h2>Formulario de la modificiacion</h2>
								</div></div>

					      		<form class="w3-container" action="modificadocompleto.php" method="post">
									<input type="hidden" name="id_soldado" value="<?php echo $id_soldado?>">
									
									<div>Escribe el nombre nuevo:<br> <input class="w3-input" type="text" name="nombre"></div>
									
									<div>Escribe la edad nueva:<br> <input class="w3-input" type="number" name="edad"></div>
									
									<div>Escribe el email nuevo:<br> <input class="w3-input" type="text" name="email"></div>
									
									<div>Escribe la fecha de alistamiento nueva:<br> <input class="w3-input" type="date" name="fecha_reclutamiento"></div>
									
									<div>Escribe el telefono nuevo:<br> <input class="w3-input" type="number" name="telefono"></div>
									
									<div>Escribe si tiene nuevos antecedentes:<br> <input class="w3-input" type="text" name="antecedentes"></div>
									
									<div>Escribe el nuevo codigo de provincia:<br> <input class="w3-input" type="number" name="cod_provincia"></div>
									
									<br><input type="submit" name="enviar">
								</form>





					      	<?php
					      	echo "</div>";
					      	echo     "<br>";
					    }
					} else {
					    echo "0 results"; //si no obtiene resultados en la consulta esto es lo que muestra
					}


				mysqli_close($conn); //cerramos la conexion
			?>
			
		</body>
</html>