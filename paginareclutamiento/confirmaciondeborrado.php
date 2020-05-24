<!DOCTYPE html>
<html>
	
	<head>
		<link href="miestilo.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="estilos/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
			<title> </title>

	</head>
		
			<style type="text/css">

				body {
  					background-image: url("estilos/imagenes/respect.jpg");
   					background-repeat: no-repeat;
   					background-position:center top;
				}
				.footer{
					position: fixed;
					left: 0;
					bottom: 0;
					width: 100%;
					background-color: red;
					color: white;
					text-align: center;
					font-size: 25px;
				}

			</style>

		<body>
			

			<?php

				include 'conexionlocal.php';

				$id_soldado=$_GET['id_soldado'];
				
				
				// Create connection
				
				$conn = new mysqli(servername, username, password, dbname);
				
				// Check connection
				
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				}

				$sql = "DELETE FROM abastecimiento 
						WHERE id_soldado='$id_soldado'";
				
				$result = $conn->query($sql);
				if($result){
				    
				    echo "<div class='w3-container w3-teal'>";
				    echo "<div class='w3-container w3-teal'>";
				    echo "<h1>El soldado fue eliminado con exito de la base de datos</h1>";
				    echo "</div>";
				    echo "</div>";
				    
				    echo "<div class='w3-container'>";
  					
					echo "</div>";

					echo "<div class='footer'><div class='w3-container w3-teal'></div>";
					
				    echo "<div>Nº de identificacion de la persona que acaba de borrar: " . $_GET['id_soldado'] . "</div>";
				    echo "</div>";
				    }

			?>
			 <button class="w3-button w3-black w3-padding-large"><a href="borrado.php">Volver a borrados</button></a><br>
			 <button class="w3-button w3-grey w3-padding-large"><a href="index.php">Volver a registrar un soldado nuevo</button></a>
			
			
		</body>
</html>
